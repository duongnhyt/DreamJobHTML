<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->tinyInteger('status')->default(1)->unsigned();
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('number_of_views')->default(0);
            $table->string('experience', '50');
//            $table->integer('major_id')->unsigned();
//            $table->foreign('major_id')->references('id')->on('majors');
            $table->string('level');
            $table->string('working_current');
            $table->integer('current_position_id')->unsigned();
            $table->foreign('current_position_id')->references('id')->on('positions');
            $table->string('about_skills');
            $table->unsignedInteger('diploma');
            $table->integer('expected_field_id')->unsigned();
            $table->foreign('expected_field_id')->references('id')->on('fields');
            $table->integer('expected_city_id')->unsigned();
            $table->foreign('expected_city_id')->references('id')->on('cities');
            $table->integer('expected_position_id')->unsigned();
            $table->foreign('expected_position_id')->references('id')->on('positions');
            $table->double('expected_salary');
            $table->integer('currency');
            $table->string('name', '25');
            $table->string('phone_number', '12');
            $table->string('email');
            $table->string('hometown', '50');
            $table->string('current_address', '50');
            $table->timestamp('birthday');
            $table->string('country', '25');
            $table->string('facebook');
            $table->boolean('gender');
            $table->string('avatar');
            $table->timestamps();
        });

        //ITSkills
        Schema::create('it_skill_resume', function (Blueprint $table) {
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->unsignedInteger('it_skill_id')->index();
            $table->foreign('it_skill_id')->references('id')->on('it_skills');
            $table->primary(['resume_id','it_skill_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        //Experience
        Schema::create('position_resume', function (Blueprint $table) {
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->unsignedInteger('position_id')->index();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->primary(['resume_id','position_id']);
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('company');
            $table->text('description');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        //Language
        Schema::create('language_language_level_resume', function (Blueprint $table) {
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->unsignedInteger('language_id')->index();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->unsignedInteger('language_level_id')->index();
            $table->foreign('language_level_id')->references('id')->on('language_levels');
            $table->primary(['resume_id','language_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        //Fields
        Schema::create('field_resume', function (Blueprint $table) {
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->unsignedInteger('field_id')->index();
            $table->foreign('field_id')->references('id')->on('fields');
            $table->primary(['resume_id','field_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        //Certificates
        Schema::create('certificate_resume', function (Blueprint $table) {
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->unsignedInteger('certificate_id')->index();
            $table->foreign('certificate_id')->references('id')->on('certificates');
            $table->primary(['resume_id','certificate_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Schema::create('resume_skill', function (Blueprint $table) {
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->unsignedInteger('skill_id')->index();
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->primary(['resume_id','skill_id']);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        //bookmark job
        Schema::create('resume_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('resume_id')->index();
            $table->foreign('resume_id')->references('id')->on('resumes');
            $table->primary(['user_id','resume_id']);
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
        Schema::drop('it_skill_resume');
        Schema::drop('position_resume');
        Schema::drop('language_language_level_resume');
        Schema::drop('field_resume');
        Schema::drop('certificate_resume');
        Schema::drop('resume_skill');
        Schema::drop('resume_user');
        Schema::drop('resumes');
    }
}
