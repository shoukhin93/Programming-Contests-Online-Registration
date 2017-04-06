<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_results', function (Blueprint $table) {
            $table->integer('contest_id')->primary();
            $table->string('team_name',20)->nullable(false);
            $table->string('mem1',8)->nullable(false);
            $table->string('mem2',8)->nullable(false);
            $table->string('mem3',8)->nullable(false);
            $table->integer('problem_solved')->nullable(false);
            $table->integer('time_penalty')->nullable(false);
            $table->integer('rank')->nullable(false);

            $table->timestamps();

            $table->foreign('contest_id')->references('contest_id')->on('previous_contests');
            $table->foreign('mem1')->references('student_id')->on('accounts');
            $table->foreign('mem2')->references('student_id')->on('accounts');
            $table->foreign('mem3')->references('student_id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_results');
    }
}
