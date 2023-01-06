<?php

namespace App\Models;

use App\Models\Traits\GetPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        'down_payment',
        'total',
        'paid',
        'remain',
        'invoice',
        'payment_path',
        'cancel_expired',
        'status',
    ];

    const PENDING = "menunggu_pembayaran";
    const SETTLE  = "sukses";
    const DONE    = "selesai";
    const CANCEL  = "dibatalkan";

    const XENDIT  = "xendit";
    const COD     = "cod";

    protected $attributes = [
        'status' => self::PENDING,
    ];

    protected $dates = [
        'cancel_expired',
    ];

    public function hasDp()
    {
        return $this->down_payment > 0;
    }

    public function getPaymentMethod()
    {
        if($this->channel === self::XENDIT) {
            return "OVO/DANA";
        }

        return Str::upper($this->channel);
    }

    public function needDp($channel = null)
    {
        return ($channel ?? $this->channel) === self::COD;
    }

    public function canCancel()
    {
        return $this->cancel_expired->timestamp <= now()->timestamp;
    }

    public function isSettle()
    {
        return $this->status === self::SETTLE;
    }

    public function isDone()
    {
        return $this->status === self::DONE;
    }

    public function isPending()
    {
        return $this->status === self::PENDING;
    }

    public function isCancel()
    {
        return $this->status === self::CANCEL;
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

    public function getPaidFormattedPrice()
    {
        return $this->formattedPrice($this->paid);
    }

    public function getDpFormattedPrice()
    {
        return $this->formattedPrice($this->down_payment);
    }

    public function getRemainFormattedPrice()
    {
        return $this->formattedPrice($this->remain);
    }

    public function getFormattedServiceDue()
    {
        return $this->requirement['service_due']->timezone('Asia/Jakarta')->toDayDateTimeString();
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

    public function requirement()
    {
        return $this->hasOne(OrderRequirement::class, 'order_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
