<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
  protected $primaryKey = 'id_product_variant';

    protected $fillable = [
        'color',
        'id_price',
    ];

    // Relasi dengan Products
    public function products()
    {
        return $this->hasMany(Product::class, 'id_product_variant');
    }

    // Relasi dengan Price
    public function price()
    {
        return $this->belongsTo(Price::class, 'id_price');
    }
}
