<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductAttribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_attribute',function(Blueprint $table){
                $table->integer('id');
                $table->integer('product_id');
                $table->integer('sku');
                $table->integer('image');
                $table->integer('price');
                $table->integer('qty');
                $table->integer('size_id');
                $table->integer('color_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_attribute');
    }
}
