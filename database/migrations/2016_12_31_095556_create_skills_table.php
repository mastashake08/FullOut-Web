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
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('basic_running_spring')->default(0);
            $table->integer('basic_standing_spring')->default(0);
            $table->integer('advanced_running_spring')->default(0);
            $table->integer('advanced_standing_spring')->default(0);
            $table->integer('elite_running_spring')->default(0);
            $table->integer('elite_standing_spring')->default(0);
            $table->integer('basic_running_hardwood')->default(0);
            $table->integer('basic_standing_hardwood')->default(0);
            $table->integer('advanced_running_hardwood')->default(0);
            $table->integer('advanced_standing_hardwood')->default(0);
            $table->integer('elite_running_hardwood')->default(0);
            $table->integer('elite_standing_hardwood')->default(0);
            $table->json('spring_floor_tumbling_skills')->nullable();
            $table->json('hard_floor_tumbling_skills')->nullable();
            $table->json('group_stunting_skills')->nullable();
            $table->json('coed_stunting_skills')->nullable();
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
