<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTeamsToTryouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tryouts', function (Blueprint $table) {
            $table->integer('team_id')->unsigned()->after('school_id');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
            $table->dropColumns(['tryouts_team_id_foreign','team_id']);
        });
    }
}
