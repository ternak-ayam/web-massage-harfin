<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'type',
        'name',
        'image',
        'deleted_at',
    ];

    public function details()
    {
        return $this->hasMany(ServiceDetail::class, 'service_id');
    }

    public function additionals()
    {
        return $this->hasMany(AdditionalService::class, 'service_id');
    }
}