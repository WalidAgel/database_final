<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
protected $primaryKey = 'id_wishlist';

    protected $fillable = [
        'id_customer',
        'id_product',
    ];

    // Relasi dengan Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    // Relasi dengan Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
