<?php

namespace App\Models;

use App\Models\Traits\HandleUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HandleUpload;

    protected $with = ['details', 'additionals'];

    protected $fillable = [
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

    public function getImagePath(): string
    {
        return 'assets';
    }
}
