<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'path',
        'status'
    ];

    protected $attributes = [
        'status' => self::PENDING
    ];

    const PENDING = "PENDING";
    const SETTLE  = "SETTLE";
    const CANCEL  = "CANCEL";
}
