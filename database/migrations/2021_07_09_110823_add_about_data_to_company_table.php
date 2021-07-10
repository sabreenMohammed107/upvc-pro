<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAboutDataToCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            
            $table->text('about_en_company')->nullable();
            $table->text('about_ar_company')->nullable();
            $table->text('story_en_company')->nullable();
            $table->text('story_ar_company')->nullable();
            $table->text('mission_en_company')->nullable();
            $table->text('mission_ar_company')->nullable();
            $table->text('vision_en_company')->nullable();
            $table->text('vision_ar_company')->nullable();
            $table->string('about_image')->nullable();
            $table->string('story_image')->nullable(); 
            $table->string('mission_image')->nullable(); 
            $table->string('vision_image')->nullable(); 
            $table->string('company_catalogue_pdf')->nullable();
             $table->string('company_profile_pdf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
