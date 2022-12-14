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
}
