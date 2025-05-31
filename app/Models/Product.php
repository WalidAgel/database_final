<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 protected $primaryKey = 'id_product';

    protected $fillable = [
        'product_name',
        'slug',
        'description',
        'stok',
        'stok_sales',
        'size',
        'view',
        'id_product_variant',
        'id_category',
    ];

    // Relasi dengan Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    // Relasi dengan Product Variant
    public function variant()
    {
        return $this->belongsTo(ProductVariant::class, 'id_product_variant');
    }

    // Relasi dengan Product Images
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    // Relasi dengan Wishlist
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'id_product');
    }

    // Relasi dengan Order Items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'id_product');
    }

    // Relasi dengan Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    // Relasi dengan Comments
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_product');
    }
}
