<?php

namespace App\Notifications;

use App\Channels\Messages\WhatsAppMessage;
use App\Channels\WhatsAppChannel;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendPaymentSuccessOrderConfirmation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [WhatsAppChannel::class, 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return WhatsAppMessage
     */
    public function toWhatsApp($notifiable)
    {
        return (new WhatsAppMessage)
            ->content("Order Anda " . $this->order->service['name'] . " dengan Order ID " . $this->order->order_id . " telah dibayar, silahkan cek di website untuk detail lebih lanjut.");
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title' => 'Pesanan Telah Dibayar',
            'body' => 'Pesanan ' . $this->order->order_id . ' telah berhasil dibayar',
        ];
    }
}
