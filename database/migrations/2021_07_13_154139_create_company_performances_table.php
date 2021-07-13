<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_performances', function (Blueprint $table) {
            $table->id();
            $table->string('en_title')->nullable();
            $table->string('ar_title')->nullable();
            $table->text('en_subTitle')->nullable();
            $table->text('ar_subTitle')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('company_performances');
    }
}
