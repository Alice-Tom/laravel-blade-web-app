<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreBottomDescriptionToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            //
            $table->text('bottom_title2')->nullable();
            $table->text('bottom_description2')->nullable();
            $table->text('bottom_cover2')->nullable();

            $table->text('bottom_title3')->nullable();
            $table->text('bottom_description3')->nullable();
            $table->text('bottom_cover3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            //
            $table->dropColumn('bottom_title2');
            $table->dropColumn('bottom_description2');
            $table->dropColumn('bottom_cover2');

            $table->dropColumn('bottom_title3');
            $table->dropColumn('bottom_description3');
            $table->dropColumn('bottom_cover3');
        });
    }
}

