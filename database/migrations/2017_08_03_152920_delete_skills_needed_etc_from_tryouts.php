<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteSkillsNeededEtcFromTryouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tryouts', function (Blueprint $table) {
            //
            $table->dropColumn(['skills_needed','skills_taught','fee']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tryouts', function (Blueprint $table) {
            //
            $table->string('skills_needed');
            $table->string('skills_taught');
            $table->decimal('fee',5,2);
        });
    }
}
