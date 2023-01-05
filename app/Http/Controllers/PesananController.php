<?php

namespace App\Http\Controllers;

use App\Http\Traits\SendAdminNotification;
use App\Http\Traits\XenditPayment;
use App\Models\AdditionalOrder;
use App\Models\AdditionalService;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderRequirement;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Traits\CreateInvoicePdf;
use App\Models\Voucher;
use App\Notifications\SendAdminOrderCancelConfirmation;
use App\Notifications\SendAdminOrderConfirmation;
use App\Notifications\SendAdminOrderDoneConfirmation;
use App\Notifications\SendOrderCancelConfirmation;
use App\Notifications\SendOrderConfirmationNotification;
use App\Notifications\SendOrderDoneConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PesananController extends Controller
{
    use CreateInvoicePdf, XenditPayment, SendAdminNotification;

    public function show(Request $request, Service $service)
    {
        $cities = Http::get("http://dev.farizdotid.com/api/daerahindonesia/provinsi")->body();

        return view('pesanan.show', [
            'service' => $service,
            'user' => $request->user(),
            'vouchers' => $request->user()->vouchers()->where('quantity', '>', 0)->get(),
            'cities' => json_decode($cities, true)['provinsi'],
            'notifications' => auth()->user()->unreadNotifications
        ]);
    }

    public function success(Order $order)
    {
        return view('pesanan.after-order', [
            'order' => $order,
            'notifications' => auth()->user()->unreadNotifications
        ]);
    }

    public function cancel(Order $order)
    {
        $order->update([
            'status' => Order::CANCEL
        ]);

        $order->buyer->notify(new SendOrderCancelConfirmation($order));
        $this->send(new SendAdminOrderCancelConfirmation($order));

        return back();
    }

    public function done(Order $order)
    {
        $order->update([
            'status' => Order::DONE
        ]);

        $order->buyer->notify(new SendOrderDoneConfirmation($order));
        $this->send(new SendAdminOrderDoneConfirmation($order));

        return back();
    }

    public function store(Request $request)
    {
        $order = new Order();

        if(blank($request->service_details)) {
            return back()->withErrors(['status' => 'Wajib memilih jasa!']);
        }

        $discount = 0;
        $downPayment = 0;
        $additionalServiceTotalPrice = 0;

        $service = Service::where('slug', $request->service)->first();

        $voucher = Voucher::where([['code', $request->voucher], ['user_id', $request->user()->id]])->first();

        $serviceDetails = ServiceDetail::whereIn('id', (array) $request->service_details)->get();
        $additionalServices = AdditionalService::whereIn('id', (array) $request->additional_services)->get();

        foreach ($additionalServices as $key => $additionalService) {
            $additionalServiceTotalPrice += $additionalService->price * $request->quantity[$additionalService->id];
        }

        $subtotal = $serviceDetails->sum('price') + $additionalServiceTotalPrice;

        if(! blank($voucher)) {
            if($voucher->amount_type === Voucher::PERCENT) {
                $discount = $subtotal * $voucher->amount;
            } else if($voucher->amount_type === Voucher::DOUBLE) {
                $discount = $voucher->amount;
            }

            $voucher->decrement('quantity');
        }

        if ($order->needDp($request->channel)) {
            $downPayment = env('DOWN_PAYMENT_AMOUNT');
        }

        $total = $subtotal - $discount;

        $order->fill([
            'order_id' => now()->timestamp . rand(0, 9),
            'user_id' => $request->user()->id,
            'service_id' => $service->id,
            'channel' => $request->channel,
            'subtotal' => $subtotal,
            'discount' => $discount,
            'down_payment' => $downPayment,
            'total' => $total,
            'remain' => $total,
            'cancel_expired' => now()->addMinutes(3)
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

        foreach ($additionalServices as $additionalService) {
            AdditionalOrder::create([
                'order_id' => $order->id,
                'additional_service_id' => $additionalService->id,
                'service_name' => $additionalService->name,
                'price' => $additionalService->price,
                'quantity' => $request->quantity[$additionalService->id],
                'subtotal' => $additionalService->price * $request->quantity[$additionalService->id],
            ]);
        }

        $orderDetails = OrderDetail::where('order_id', $order->id)->get();
        $additionalOrders = AdditionalOrder::where('order_id', $order->id)->get();

        $invoiceUrl = $this->createInvoice($order, $orderDetails, $additionalOrders, $orderReq);

        $paymentUrl = $this->processXenditTransaction($order, $order->channel);

        $order->update([
            'invoice' => $invoiceUrl,
            'payment_path' => $paymentUrl
        ]);

        $this->send(new SendAdminOrderConfirmation($order));
        $request->user()->notify(new SendOrderConfirmationNotification($order, $paymentUrl));

        return redirect(route('pesanan.success', $order->order_id));
    }
}
