<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'name',
        'customer_sex',
        'phone',
        'city',
        'address',
        'service_due',
        'therapist_sex',
        'style_type_sex',
        'notes',
    ];

    protected $dates = [
      'service_due',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function getCustomerSex()
    {
        return $this->customer_sex === 0 ? "Wanita" : "Pria";
    }

    public function getTherapistSex()
    {
        return $this->therapist_sex === 0 ? "Wanita" : "Pria";
    }

    public function getStyleSex()
    {
        return $this->style_type_sex === 0 ? "Wanita" : "Pria";
    }
}
