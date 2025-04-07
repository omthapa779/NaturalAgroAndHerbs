<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'is_featured'
    ];

    /**
     * Get the sizes for the product.
     */
    public function sizes(): HasMany
    {
        return $this->hasMany(ProductSize::class);
    }

    /**
     * Get the default size for the product.
     */
    public function defaultSize()
    {
        return $this->sizes()->where('is_default', true)->first();
    }

    /**
     * Get the default price for the product.
     */
    public function getDefaultPriceAttribute()
    {
        $defaultSize = $this->defaultSize();
        return $defaultSize ? $defaultSize->price : 0;
    }
}