<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagDescriptionToAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->text('tag_title')->nullable();
            $table->text('tag_description1')->nullable();
            $table->text('tag_description2')->nullable();
            $table->text('tag_description3')->nullable();
            $table->text('proposition_name1')->nullable();
            $table->text('proposition_description1')->nullable();
            $table->text('proposition_name2')->nullable();
            $table->text('proposition_description2')->nullable();
            $table->text('proposition_name3')->nullable();
            $table->text('proposition_description3')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
            $table->dropColumn('mobilization');
        });
    }
}
