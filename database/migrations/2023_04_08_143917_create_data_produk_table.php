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
        Schema::create('data_produk', function (Blueprint $table) {
            $table->id();
            $table->string('product_type');
            $table->string('product_category_name');
            $table->string('product_latitude');
            $table->string('product_longitude');
            $table->string('product_uxid');
            $table->string('product_code');
            $table->string('product_name');
            $table->string('product_info');
            $table->string('product_detail');
            $table->string('product_image');
            $table->string('product_unit');
            $table->string('product_weight');
            $table->string('product_base_price');
            $table->string('product_sale_price');
            $table->string('product_stock_in');
            $table->string('product_stock_out');
            $table->string('product_stock_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_produk');
    }
};
