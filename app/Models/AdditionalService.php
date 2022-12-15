<?php

namespace App\Models;

use App\Models\Traits\GetPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalService extends Model
{
    use HasFactory, GetPrice;

    protected $fillable = [
        'service_id',
        'name',
        'image',
        'duration',
        'price',
        'description',
        'deleted_at',
    ];
}
