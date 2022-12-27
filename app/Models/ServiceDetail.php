<?php

namespace App\Models;

use App\Models\Traits\GetPrice;
use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory, GetPrice, HandleUpload;

    protected $fillable = [
        'service_id',
        'image',
        'title',
        'duration',
        'price',
        'description',
        'deleted_at',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function getImagePath(): string
    {
        return 'assets';
    }
}
