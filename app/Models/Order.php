<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 protected $primaryKey = 'id_order';

    protected $fillable = [
        'order_number',
        'customer_id',
        'total_harga',
        'status_order',
        'catatan',
        'tanggal_order',
        'expired_at',
    ];

    protected $casts = [
        'total_harga' => 'decimal:2',
        'tanggal_order' => 'date',
        'expired_at' => 'timestamp',
    ];

    // Relasi dengan Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Relasi dengan Order Items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'id_order_items');
    }
}
