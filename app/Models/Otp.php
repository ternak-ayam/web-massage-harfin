<?php

namespace App\Models;

use App\Events\WhatsappEvent;
use App\Models\Traits\WhatsAppSettingTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Otp extends Model
{
    use HasFactory, Notifiable, WhatsAppSettingTrait;

    protected $fillable = [
        'token',
        'country_code',
        'name',
        'email',
        'phone',
        'password',
        'count_sending',
        'expired_at',
        'verified_at'
    ];

    const EXPIRED_IN_MNT = 2;
//
//    protected $dispatchesEvents = [
//        'created' => WhatsappEvent::class,
//    ];
}
