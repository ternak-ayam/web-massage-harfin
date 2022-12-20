<?php

namespace App\Models;

use App\Models\Traits\GetPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory, GetPrice;

    protected $fillable = [
        'order_id',
        'user_id',
        'service_id',
        'channel',
        'subtotal',
        'discount',
        'total',
        'invoice',
        'status',
        'cancel_expired',
    ];

    const PENDING = "menunggu_pembayaran";
    const SETTLE  = "sukses";
    const DONE    = "selesai";
    const CANCEL  = "dibatalkan";

    protected $attributes = [
        'status' => self::PENDING,
    ];

    protected $dates = [
        'cancel_expired',
    ];

    public function canCancel()
    {
        return $this->cancel_expired->timestamp > now()->timestamp;
    }

    public function getSubtotalFormattedPrice()
    {
        return $this->formattedPrice($this->subtotal);
    }

    public function getDiscountFormattedPrice()
    {
        return $this->formattedPrice($this->discount);
    }

    public function getTotalFormattedPrice()
    {
        return $this->formattedPrice($this->total);
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function additionals()
    {
        return $this->hasMany(AdditionalOrder::class, 'order_id');
    }
}
