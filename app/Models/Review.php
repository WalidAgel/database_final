<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
protected $primaryKey = 'id_Review';

    protected $fillable = [
        'customer_id',
        'product_id',
        'order_item_id',
        'rating',
    ];

    // Relasi dengan Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Relasi dengan Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Relasi dengan Order Item
    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class, 'order_item_id');
    }
}
