<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuningContestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('running_contests', function (Blueprint $table) {
            $table->string('contest_name',100)->nullable(false)->primary();
            $table->date('contest_date')->nullable(false);
            $table->time('contest_start')->nullable(false);
            $table->time('contest_end')->nullable(false);
            $table->date('reg_close_date')->nullable(false);
            $table->time('reg_close_time')->nullable(true)->default('23:59:59');
            $table->longText('description')->nullable(true);

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
        Schema::dropIfExists('running_contests');
    }
}
