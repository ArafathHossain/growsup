<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_title',
        'service_slug',
        'service_icon',
        'service_price',
        'service_status',
        'service_short_description',
        'service_long_description',
    ];
}
