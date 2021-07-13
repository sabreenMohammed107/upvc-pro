<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
           
            $table->string('en_name')->nullable();
            $table->string('ar_name')->nullable();
            $table->string('master_image')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->string('en_description')->nullable();
            $table->string('ar_description')->nullable();
            $table->string('thickness')->nullable();
            $table->string('chambers')->nullable();
            $table->string('glass')->nullable();
            $table->string('product_details_img')->nullable();
            $table->string('product_profile_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
