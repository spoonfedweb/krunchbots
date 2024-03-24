<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size',
        'color',
        'brand_id',
        'category_id',
        'price',
        'sku',
        'description',
        'categoryable_id',
    ];

    public static $rules = [
        'sku' => 'required|unique:product_variants,sku',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
