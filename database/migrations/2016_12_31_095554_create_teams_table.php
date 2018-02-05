<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->string('team_name');
            $table->string('coach_name');
            $table->string('logo');
            $table->string('mascot');
            $table->string('color_code')->nullable();
            $table->longText('description');
            $table->string('team_type');
            $table->string('wins_uca');
            $table->string('wins_nca');
            $table->string('wins_worlds');
            $table->string('wins_other');
            $table->string('team_responsibilities');
            $table->string('number_members');
            $table->string('average_room');
            $table->string('same_information')->nullable();
            $table->string('tuition_cost_in');
            $table->string('tuition_cost_out');
            $table->longText('description_program');
            $table->longText('financial_requirements');
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
        Schema::dropIfExists('teams');
    }
}
