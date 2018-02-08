<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainInformationStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_information_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('dob');
            $table->string('zip');
            $table->string('school_type');
            $table->string('current_school');
            $table->string('current_year');
            $table->string('current_gpa');
            $table->string('act_score');
            $table->string('highest_sat');
            $table->string('bio');
            $table->string('weight');
            $table->string('height');
            $table->string('age');
            $table->string('current_program_timeline');
            $table->string('past_program_timeline');
            $table->string('accolades');
            $table->json('cheertype');
            $table->string('visibility');
            $table->string('looking_for');
            $table->longText('description');
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
        Schema::dropIfExists('main_information_students');
    }
}
