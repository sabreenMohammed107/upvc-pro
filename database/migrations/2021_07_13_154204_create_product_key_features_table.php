<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductKeyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_key_features', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->nullable();
            $table->string('ar_title')->nullable();
            $table->text('en_feature')->nullable();
            $table->text('ar_feature')->nullable();
            $table->integer('order')->nullable();
            $table->bigInteger('product_id')->unsigned()->nullable();
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
        Schema::dropIfExists('product_key_features');
    }
}
