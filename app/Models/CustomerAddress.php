<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
protected $primaryKey = 'id_customer_addresses';

    protected $fillable = [
        'alamat_lengkap',
        'kota',
        'provinsi',
        'kode_pos',
        'alamat_utama',
        'patokan',
    ];

    protected $casts = [
        'alamat_utama' => 'boolean',
    ];

    // Relasi dengan Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer_addresses');
    }
}
