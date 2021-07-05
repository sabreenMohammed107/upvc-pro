<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeVediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_vedios', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->nullable();
            $table->string('ar_title')->nullable();
            $table->string('vedio')->nullable();
            $table->text('en_text')->nullable();
            $table->text('ar_text')->nullable();
           
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
        Schema::dropIfExists('home_vedios');
    }
}
