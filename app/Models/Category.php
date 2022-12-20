<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'image',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
