<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_contests', function (Blueprint $table) {
            $table->increments('contest_id');
            $table->string('contest_name',100)->nullable(false)->unique();
            $table->date('contest_date')->nullable(false);
            $table->time('contest_start')->nullable(false);
            $table->time('contest_end')->nullable(false);
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
        Schema::dropIfExists('previous_contests');
    }
}
