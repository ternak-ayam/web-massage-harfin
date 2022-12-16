<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'channel',
        'subtotal',
        'discount',
        'total',
        'invoice',
        'status',
    ];

    const PENDING = "pending";

    protected $attributes = [
        'status' => self::PENDING,
    ];
}
