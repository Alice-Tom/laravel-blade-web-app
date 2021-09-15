<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('title1')->nullable();
            $table->text('link1')->nullable();
            $table->text('description1')->nullable();
            $table->text('image1')->nullable();

            $table->text('title2')->nullable();
            $table->text('link2')->nullable();
            $table->text('description2')->nullable();
            $table->text('image2')->nullable();
            
            $table->text('title3')->nullable();
            $table->text('link3')->nullable();
            $table->text('description3')->nullable();
            $table->text('image3')->nullable();

            $table->text('intro_title')->nullable();
            $table->text('intro_link')->nullable();
            $table->text('intro_content')->nullable();
            $table->text('intro_image')->nullable();
            $table->text('intro_video')->nullable();

            $table->text('sec3_title')->nullable();
            $table->text('sec3_link')->nullable();
            $table->text('sec3_content')->nullable();
            $table->text('sec3_image')->nullable();
     
            $table->text('sec4_title')->nullable();
            $table->text('sec4_link')->nullable();
            $table->text('sec4_content')->nullable();
            $table->text('sec4_image')->nullable();

            $table->text('staff_title')->nullable();
            $table->text('staff_link')->nullable();
            $table->text('staff_content')->nullable();


            $table->text('bottom1_title')->nullable();
            $table->text('bottom1_link')->nullable();
            $table->text('bottom1_description')->nullable();

            $table->text('bottom2_title')->nullable();
            $table->text('bottom2_link')->nullable();
            $table->text('bottom2_description')->nullable(); 
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
        Schema::dropIfExists('homes');
    }
}
