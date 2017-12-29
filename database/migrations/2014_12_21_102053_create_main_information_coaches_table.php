<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainInformationCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_information_coaches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('program_name');
            $table->string('coaching_title');
            $table->string('same_information')->nullable();
            $table->string('offer_scholarship')->nullable();
            $table->longText('scholarship_text');
            $table->string('tuition_cost');
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
        Schema::dropIfExists('main_information_coaches');
    }
}
