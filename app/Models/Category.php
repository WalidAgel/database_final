<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $primaryKey = 'id_category';

    protected $fillable = [
        'category_name',
        'slug',
        'description',
        'img',
    ];

    // Relasi dengan Products
    public function products()
    {
        return $this->hasMany(Product::class, 'id_category');
    }
}
