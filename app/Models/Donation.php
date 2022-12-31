<?php

namespace App\Models;

use App\Models\Traits\GetPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory, GetPrice;

    protected $fillable = [
        'id',
        'user_id',
        'amount',
        'path',
        'status'
    ];

    protected $attributes = [
        'status' => self::PENDING
    ];

    public function getFormattedAmount()
    {
        return $this->formattedPrice($this->amount);
    }

    const PENDING = "PENDING";
    const SETTLE  = "SETTLE";
    const CANCEL  = "CANCEL";
}
