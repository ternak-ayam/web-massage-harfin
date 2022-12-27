<?php

namespace App\Http\Traits;

use App\Models\Donation;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Xendit\Invoice;
use Xendit\Xendit;

Xendit::setApiKey(env('XENDIT_API'));

trait XenditPayment
{
    use XenditWebhookHandler;

    public $items = [];

    public function createPaymentXendit($order, $payment_method): array
    {
        $user = auth()->user();

        if ($payment_method === Order::XENDIT) {
            $gross_amount = $this->setItems($order);
        } else {
            $gross_amount = $this->setDownPayment($order);
        }

        $params = [
            'external_id' => (string)$order->order_id,
            'amount' => $gross_amount,
            'description' => 'Order for' . ($payment_method === Order::XENDIT ? ' booking ' : ' down payment ') . $order->service['name'] . ' from ' . $user->name,
            'customer' => [
                'given_names' => $user->name,
                'email' => $user->email,
                'mobile_number' => $user->getPhoneNumber(),
            ],
            'payment_methods' => ['OVO', 'DANA', 'QRIS'],
            'locale' => 'id',
            'success_redirect_url' => route('pesanan.success', $order->order_id),
            'failure_redirect_url' => route('pesanan.success', $order->order_id),
            'currency' => 'IDR',
            'items' => $this->items,
        ];

        return Invoice::create($params);
    }

    public function createDonation($request)
    {
        $user = auth()->user();
        $donationId = now()->timestamp . rand(0, 9);

        $params = [
            'external_id' => $donationId,
            'amount' => (double)$request->amount,
            'description' => 'Donation from ' . $user->name,
            'customer' => [
                'given_names' => $user->name,
                'email' => $user->email,
                'mobile_number' => $user->getPhoneNumber(),
            ],
            'payment_methods' => ['OVO', 'DANA', 'QRIS'],
            'locale' => 'id',
            'success_redirect_url' => url('/'),
            'failure_redirect_url' => url('/'),
            'currency' => 'IDR',
            'items' => [
                [
                    'price' => (double) $request->amount,
                    'quantity' => 1,
                    'name' => "Donasi",
                ]
            ]
        ];

        $invoice = Invoice::create($params);

        return Donation::create([
            'id' => $donationId,
            'user_id' => $user->id,
            'amount' => $request->amount,
            'path' => $invoice['invoice_url']
        ]);
    }

    public function processXenditTransaction($order, $payment_method)
    {
        return DB::transaction(function () use ($order, $payment_method) {
            $payment = $this->createPaymentXendit($order, $payment_method);

            return $payment['invoice_url'];
        });
    }

    public function setItems($order)
    {
        $gross_amount = 0;
        foreach ($order->details as $detail) {
            $this->items[] = array(
                'price' => $detail->price,
                'quantity' => 1,
                'name' => $detail->service_name,
            );

            $gross_amount += $detail->price * 1;
        }

        foreach ($order->additionals as $additional) {
            $this->items[] = array(
                'price' => $additional->price,
                'quantity' => $additional->quantity,
                'name' => $additional->service_name,
            );

            $gross_amount += $additional->price * $additional->quantity;
        }

        return $gross_amount;
    }

    public function setDownPayment($order)
    {
        $this->items[] = array(
            'price' => env('DOWN_PAYMENT_AMOUNT'),
            'quantity' => 1,
            'name' => $order->service['name'],
        );

        return env('DOWN_PAYMENT_AMOUNT');
    }
}
