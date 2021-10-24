<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBottom3ToHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homes', function (Blueprint $table) {
            $table->text('bottom3_title')->nullable();
            $table->text('bottom3_link')->nullable();
            $table->text('bottom3_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homes', function (Blueprint $table) {
            //
            $table->dropColumn('bottom3_title');
            $table->dropColumn('bottom3_link');
            $table->dropColumn('bottom3_description');
        });
    }
}
