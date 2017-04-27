<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('basic_running')->default(0);
            $table->integer('basic_standing')->default(0);
            $table->integer('basic_tumbling')->default(0);
            $table->integer('advance_standing')->default(0);
            $table->integer('advance_tumbing')->default(0);
            $table->integer('elite_running')->default(0);
            $table->integer('elite_standing')->default(0);
            $table->integer('elite_tumbling')->default(0);
            $table->integer('basic_group_stunting')->default(0);
            $table->integer('basic_stationary_group_stunting')->default(0);
            // column 154 resume
            $table->integer('total_basic_score');
            $table->integer('total_advance_score');
            $table->integer('total_elite_score');
            $table->integer('total_score');
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
        Schema::dropIfExists('skills');
    }
}
