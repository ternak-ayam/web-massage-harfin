<?php

namespace App\Models;

use App\Events\WhatsappEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Otp extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'token',
        'country_code',
        'name',
        'email',
        'phone',
        'count_sending',
        'expired_at',
        'verified_at'
    ];

    protected $dispatchesEvents = [
        'created' => WhatsappEvent::class,
    ];

    public function getPhoneNumber()
    {
        return $this->country_code . $this->phone;
    }

    public function routeNotificationForWhatsApp()
    {
        return $this->getPhoneNumber();
    }
}
