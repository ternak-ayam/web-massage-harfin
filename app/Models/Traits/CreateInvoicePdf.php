<?php

namespace App\Models\Traits;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

trait CreateInvoicePdf {
    public function createInvoice($order, $orderDetails, $additionalOrders, $orderReq)
    {
        $items = [];

        $customer = new Buyer([
            'name' => $orderReq->name,
            'custom_fields' => [
                'telepon' => $orderReq->phone,
                'kota' => $orderReq->city,
                'alamat lengkap' => $orderReq->address,
                'pembayaran' => $order->channel,
                'jenis kelamin' => $orderReq->getCustomerSex(),
                'tanggal' => $orderReq->service_due->format('j F Y H:i'),
                'catatan tambahan' => $orderReq->notes,
            ],
        ]);

        foreach ($orderDetails as $item) {
            $items[] = (new InvoiceItem())->title($item->service_name)->pricePerUnit($item->price);
        }

        foreach ($additionalOrders as $item) {
            $items[] = (new InvoiceItem())->title($item->service_name)->pricePerUnit($item->price)->quantity($item->quantity);
        }

        if($order->hasDp()) {
            $items[] = (new InvoiceItem())->title("Uang Jaminan")->pricePerUnit(-$order->down_payment)->quantity(1);
        }

        $invoice = Invoice::make()
            ->buyer($customer)
            ->addItems($items)
            ->logo(public_path('/assets/Logo Warna.png'))
            ->sequence($orderReq->order['order_id'])
            ->name('invoice_JLP_' . $orderReq->order['order_id'])
            ->save('public');

        return $invoice->url();
    }
}
