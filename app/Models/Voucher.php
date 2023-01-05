<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'name',
        'description',
        'type',
        'quantity',
        'image',
        'amount_type',
        'amount',
        'max_amount',
        'min_order',
        'used_at'
    ];

    const PERCENT = "PERCENT";
    const DOUBLE  = "DOUBLE";

    const PERSONAL  = "PERSONAL";
}
