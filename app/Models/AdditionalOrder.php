<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'additional_service_id',
        'service_name',
        'price',
        'quantity',
        'subtotal',
    ];

    public function additionalOrder()
    {
        return $this->belongsTo(AdditionalService::class, 'additional_service_id');
    }
}
