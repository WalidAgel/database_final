<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
 protected $primaryKey = 'id_price';

    protected $fillable = [
        'regular_price',
        'price_sale',
    ];

    // Relasi dengan Product Variants
    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'id_price');
    }
}
