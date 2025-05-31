<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 100);
            $table->string('slug', 255);
            $table->text('description');
            $table->integer('stok');
            $table->integer('stok_sales');
            $table->integer('size');
            $table->integer('view')->default(0);
            $table->foreignId('id_product_variant')->constrained('product_variant');
            $table->foreignId('id_category')->constrained('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
