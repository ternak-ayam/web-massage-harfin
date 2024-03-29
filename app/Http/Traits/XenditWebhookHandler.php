<?php

namespace App\Http\Traits;

use App\Models\Donation;
use App\Models\Order;
use App\Notifications\SendAdminDonationConfirmation;
use App\Notifications\SendAdminOrderConfirmation;
use App\Notifications\SendInvoiceToAdmin;
use App\Notifications\SendPaymentSuccessOrderConfirmation;

trait XenditWebhookHandler
{
    use SendAdminNotification;

    public function handleXendit()
    {
        $reqHeaders = getallheaders();
        $xIncomingCallbackTokenHeader = $reqHeaders['X-CALLBACK-TOKEN'] ?? "";

        if ($xIncomingCallbackTokenHeader === env('XENDIT_CALLBACK')) {

            $rawRequestInput = file_get_contents("php://input");

            $arrRequestInput = json_decode($rawRequestInput, true);

            $_id = $arrRequestInput['external_id'];
            $_status = $arrRequestInput['status'];
            $_paid_amount = $arrRequestInput['paid_amount'];

            if (in_array($_status, ['PAID', 'SETTLED'])) {
                $status = Order::SETTLE;
            } else if ($_status == 'PENDING') {
                $status = Order::PENDING;
            } else if ($_status == 'EXPIRED') {
                $status = Order::CANCEL;
            } else {
                $status = Order::CANCEL;
            }

            if ($order = Order::where('order_id', $_id)->first()) {
                Order::where('order_id', $_id)->update([
                    'status' => $status,
                    'remain' => $order->total - $_paid_amount,
                    'paid' => $_paid_amount
                ]);

                if ($status === Order::SETTLE) {
//                    $this->send(new SendAdminOrderConfirmation($order));
                    $order->buyer->notify(new SendPaymentSuccessOrderConfirmation($order));
                }

            } else {
                Donation::where('id', $_id)->update([
                    'status' => $status
                ]);

                $donation = Donation::where('id', $_id)->first();

                if ($status === Order::SETTLE) {
                    $this->send(new SendAdminDonationConfirmation($donation));
                }
            }

            return \stdClass::class;
        }

        abort(403);
    }
}
