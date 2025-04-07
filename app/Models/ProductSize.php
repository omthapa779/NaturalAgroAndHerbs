<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSize extends Model
{
    protected $fillable = [
        'product_id',
        'size',
        'price',
        'is_default'
    ];

    /**
     * Get the product that owns the size.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}