<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id',8)->nullable(false);
            $table->string('team_name',20)->nullable(false);
            $table->integer('rank')->nullable(false);

            $table->timestamps();

            $table->foreign('student_id')->references('student_id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_results');
    }
}
