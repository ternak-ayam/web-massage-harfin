<?php

namespace App\Listeners;

use App\Events\WhatsappEvent;
use App\Notifications\SendOtpWhatsappNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
use Twilio\Rest\Client;

class SendOtpToWhatsapp implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  WhatsappEvent  $event
     * @return MessageInstance
     */
    public function handle(WhatsappEvent $event)
    {
        return $event->otp->notify(new SendOtpWhatsappNotification($event));
    }
}
