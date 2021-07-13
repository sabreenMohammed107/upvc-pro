<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  This is Realations for the products Table ..
        Schema::table('products', function (Blueprint $table) {
           
            $table->foreign('category_id')->references('id')->on('product_categories'); 
        });
        //  This is Realations for the product_imgs Table ..
        Schema::table('product_imgs', function (Blueprint $table) {
           
            $table->foreign('product_id')->references('id')->on('products'); 
        });
        //  This is Realations for the product_key_features Table ..
        Schema::table('product_key_features', function (Blueprint $table) {
           
            $table->foreign('product_id')->references('id')->on('products'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
