<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 
        'product_description', 
        'category', 
        'benefits', 
        'how_to_use', 
        'product_image', 
        'extra_image', 
        'price',
        'is_featured'
    ];
}

