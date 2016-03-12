<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->foreign('id')->references('id')->on('users');
            $table->string('address');
            $table->text('description');
            $table->string('avatar');
            $table->string('logo');
            $table->string('fax');
            $table->string('website');
            $table->string('facebook');
            $table->unsignedInteger('number_of_employees')->default(0);
            $table->boolean('partner')->defaul(false);
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
        Schema::drop('employers');
    }
}
