<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
 protected $primaryKey = 'id_customer';

    protected $fillable = [
        'id_user',
        'nama_lengkap',
        'no_telepon',
        'tanggal_lahir',
        'profil_picture',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan Customer Address
    public function addresses()
    {
        return $this->hasMany(CustomerAddress::class, 'id_customer_addresses');
    }

    // Relasi dengan Wishlist
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'id_customer');
    }

    // Relasi dengan Orders
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }

    // Relasi dengan Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'customer_id');
    }

    // Relasi dengan Comments
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_customer');
    }
}

