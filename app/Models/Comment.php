<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
 protected $primaryKey = 'id_comment';

    protected $fillable = [
        'id_customer',
        'id_product',
        'comment',
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
