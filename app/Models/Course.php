<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $tabla = 'courses';
    protected $fillable = [
        'title',
        'slug',
        'price',
        'image',
        'category_id',
        'description',
        'status'
    ];
}
