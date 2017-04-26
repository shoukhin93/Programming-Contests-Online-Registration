<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {

            $table->string('student_id', 8)->nullable(false)->primary();
            $table->string('password', 500)->nullable(false);
            $table->string('email', 100)->nullable(false)->unique();
            $table->string('fname', 10)->nullable(false);
            $table->string('lname', 10)->nullable(false);
            $table->string('year', 20)->nullable(false);
            $table->string('phone', 11)->nullable(false);
            $table->string('gender', 10)->nullable(false);
            $table->string('img', 50)->nullable(false)->default("");
            $table->boolean('status')->nullable(false)->default(false);

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
        Schema::dropIfExists('accounts');
    }
}
