<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Course extends Model
{
    protected $tabla = 'courses';
    protected $fillable = [
        'title',
        'slug',
        'price',
        'duration',
        'image',
        'category_id',
        'description',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

}
