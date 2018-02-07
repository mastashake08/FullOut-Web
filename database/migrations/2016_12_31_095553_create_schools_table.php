<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('logo');
            $table->longText('description');
            $table->string('office_phone');
            $table->string('cell_phone')->nullable();
            $table->longText('office_address');
            $table->string('in_state_tuition');
            $table->string('out_state_tuition');
            $table->string('website');
            $table->string('min_gpa');
            $table->string('min_gpa_transfer');
            //GPA needed to stay on team
            $table->string('gpa_needed_for_team');
            $table->string('dob');
            $table->string('number_hours');
            $table->string('other_testing');
            $table->string('popular_scholarship_outside_program');
            $table->string('act_score');
            $table->string('sat_score');
            $table->string('offer_scholarship')->nullable();
            $table->longText('scholarship_text');
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
        Schema::dropIfExists('schools');
    }
}
