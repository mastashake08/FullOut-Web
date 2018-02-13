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
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('dob')->nullable();
            $table->string('zip')->nullable();
            $table->string('school_type')->nullable();
            $table->string('current_school')->nullable();
            $table->string('current_year')->nullable();
            $table->string('current_gpa')->nullable();
            $table->string('act_score')->nullable();
            $table->string('highest_sat')->nullable();
            $table->string('bio')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('age')->nullable();
            $table->string('current_program_timeline')->nullable();
            $table->string('past_program_timeline')->nullable();
            $table->string('accolades')->nullable();
            $table->json('cheertype')->nullable();
            $table->string('visibility')->nullable();
            $table->string('looking_for')->nullable();
            $table->longText('description')->nullable();
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
