<?php

namespace App\Models;

use App\Models\Traits\WhatsAppSettingTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable, WhatsAppSettingTrait;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'country_code',
    ];
}
