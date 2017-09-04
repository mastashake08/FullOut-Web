<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            //
            $table->integer('spring_stunting_score')->default(0);
            $table->integer('spring_tumbling_score')->default(0);
            $table->integer('hard_stunting_score')->default(0);
            $table->integer('hard_tumbling_score')->default(0);
            $table->integer('group_stunting_score')->default(0);
            $table->integer('coed_stunting_score')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            //
        });
    }
}
