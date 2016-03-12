<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->foreign('id')->references('id')->on('users');
            $table->boolean('gender')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->string('country');
            $table->text('description');
            $table->string('address')->nullable();
            $table->string('current_address')->nullable();
            $table->string('avatar');
            $table->string('facebook');
            $table->unsignedInteger('number_of_employees')->default(0);
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
        Schema::drop('job_seekers');
    }
}
