<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //category
//            $table->integer('certificate_id')->unsigned();
//            $table->foreign('certificate_id')->references('id')->on('certificates');
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('status')->default(1)->unsigned();
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedInteger('position_id')->nullable();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->string('custom_position')->nullable();
            $table->unsignedInteger('number_of_views')->default(0);
            $table->unsignedInteger('number_of_applications')->default(0);
            $table->unsignedInteger('diploma');
            $table->double('max_salary');
            $table->double('min_salary');
            $table->timestamps();
        });
        //bookmark job
        Schema::create('job_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('job_id')->index();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->primary(['user_id','job_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        //Application
        Schema::create('job_resume_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('job_id')->index();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->primary(['user_id','job_id','resume_id']);
            $table->string('email');
            $table->string('phone_number');
            $table->string('cv_link')->nullable();
            $table->tinyInteger('status')->default(0)->unsigned();
            $table->text('introduction_letter')->nullable();
            $table->string('recent_job')->nullable();
            $table->string('recent_company')->nullable();
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::create('language_language_level_job', function (Blueprint $table) {
            $table->unsignedInteger('job_id')->index();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unsignedInteger('language_id')->index();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->unsignedInteger('language_level_id')->index();
            $table->foreign('language_level_id')->references('id')->on('language_levels');
            $table->primary(['job_id','language_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::create('skill_job', function (Blueprint $table) {
            $table->unsignedInteger('job_id')->index();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unsignedInteger('skill_id')->index();
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->primary(['job_id','skill_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::create('it_skill_job', function (Blueprint $table) {
            $table->unsignedInteger('job_id')->index();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unsignedInteger('it_skill_id')->index();
            $table->foreign('it_skill_id')->references('id')->on('it_skills');
            $table->primary(['job_id','it_skill_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_user');
        Schema::drop('job_resume_user');
        Schema::drop('language_language_level_job');
        Schema::drop('skill_job');
        Schema::drop('it_skill_job');
        Schema::drop('jobs');
    }
}
