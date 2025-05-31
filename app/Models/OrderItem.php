<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
protected $primaryKey = 'id_order_items';

    protected $fillable = [
        'id_product',
        'total',
        'unit_price',
        'subtotal',
    ];

    protected $casts = [
        'unit_price' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    // Relasi dengan Order
    public function order()
    {
        return $this->belongsTo(Order::class, 'id_order_items');
    }

    // Relasi dengan Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    // Relasi dengan Review
    public function review()
    {
        return $this->hasOne(Review::class, 'order_item_id');
    }
}
