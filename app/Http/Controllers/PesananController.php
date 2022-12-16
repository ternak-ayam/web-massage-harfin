<?php

namespace App\Http\Controllers;

use App\Models\AdditionalOrder;
use App\Models\AdditionalService;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderRequirement;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Traits\CreateInvoicePdf;
use App\Notifications\SendOrderConfirmationNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesananController extends Controller
{
    use CreateInvoicePdf;

    public function show(Request $request, Service $service)
    {
        $cities = Http::get("http://dev.farizdotid.com/api/daerahindonesia/provinsi")->body();

        return view('pesanan.show', [
            'service' => $service,
            'user' => $request->user(),
            'cities' => json_decode($cities, true)['provinsi'],
        ]);
    }


    public function store(Request $request)
    {
        $additionalServiceTotalPrice = 0;
        $service = Service::where('slug', $request->service)->first();

        $serviceDetails = ServiceDetail::whereIn('id', $request->service_details)->get();
        $additionalServices = AdditionalService::whereIn('id', $request->additional_services)->get();

        foreach ($additionalServices as $key => $additionalService) {
            $additionalServiceTotalPrice += $additionalService->price * $request->quantity[$key];
        }

        $subtotal = $serviceDetails->sum('price') + $additionalServiceTotalPrice;
        $discount = 0;
        $total = $subtotal - $discount;

            $order = new Order();

            $order->fill([
                'user_id' => $request->user()->id,
                'service_id' => $service->id,
                'channel' => $request->channel,
                'subtotal' => $subtotal,
                'discount' => $discount,
                'total' => $total,
            ]);

            $order->saveOrFail();

            $orderReq = OrderRequirement::create([
                'order_id' => $order->id,
                'name' => $request->user_name,
                'customer_sex' => $request->customer_sex,
                'phone' => explode('+', $request->phone)[1],
                'city' => $request->city,
                'address' => $request->address,
                'service_due' => $request->date . ' ' . $request->time . ':00',
                'therapist_sex' => $request->therapist_sex,
                'style_type_sex' => $request->style_type_sex,
                'notes' => $request->notes,
            ]);

            foreach ($serviceDetails as $serviceDetail) {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'service_detail_id' => $serviceDetail->id,
                    'service_name' => $serviceDetail->title,
                    'price' => $serviceDetail->price,
                ]);
            }

            foreach ($additionalServices as $key => $additionalService) {
                AdditionalOrder::create([
                    'order_id' => $order->id,
                    'additional_service_id' => $additionalService->id,
                    'service_name' => $additionalService->name,
                    'price' => $additionalService->price,
                    'quantity' => $request->quantity[$key],
                    'subtotal' => $additionalService->price * $request->quantity[$key],
                ]);
            }

            $orderDetails = OrderDetail::where('order_id', $order->id)->get();
            $additionalOrders = AdditionalOrder::where('order_id', $order->id)->get();

            $invoiceUrl = $this->createInvoice($order, $orderDetails, $additionalOrders, $orderReq);

            $order->update([
                'invoice' => $invoiceUrl,
            ]);

            $request->user()->notify(new SendOrderConfirmationNotification($order));

            return redirect(route('pemesanan.index'));

    }
}
