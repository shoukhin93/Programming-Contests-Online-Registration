<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {

            $table->string('team_leader',8)->primary();
            $table->string('team_name',20)->nullable(false);
            $table->string('mem2',8)->nullable(false);
            $table->string('mem3',8)->nullable(false);

            $table->foreign('team_leader')->references('student_id')->on('accounts');
            $table->foreign('mem2')->references('student_id')->on('accounts');
            $table->foreign('mem3')->references('student_id')->on('accounts');

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
