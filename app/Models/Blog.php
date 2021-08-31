<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blogcategory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'image',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Blogcategory::class);
    }
}
