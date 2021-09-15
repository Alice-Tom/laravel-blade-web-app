<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('intro_title')->nullable();
            $table->text('intro_link')->nullable();
            $table->text('intro_description')->nullable();
            $table->text('intro_image')->nullable();
            $table->text('who_are_we')->nullable();
            $table->text('mission1_title')->nullable();
            $table->text('mission1_description')->nullable();
            $table->text('mission1_icon')->nullable();
            $table->text('mission2_title')->nullable();
            $table->text('mission2_description')->nullable();
            $table->text('mission2_icon')->nullable();
            $table->text('culture_title')->nullable();
            $table->text('culture_description')->nullable();
            $table->text('culture_description_blockquote')->nullable();
            $table->text('proposition_title')->nullable();
            $table->text('proposition_icon')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
