<?php

namespace App\Models;

use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HandleUpload;

    protected $fillable = [
        'slug',
        'name',
        'image',
        'service_id',
    ];

    public function getImagePath(): string
    {
        return 'assets';
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
