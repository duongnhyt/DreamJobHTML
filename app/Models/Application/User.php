<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //table name
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //relation with job_seekers
    public function job_seekers()
    {
        return $this->belongsTo('App\Models\Application\Job_seeker');
    }

    //relation with employers
    public function employers()
    {
        return $this->belongsTo('App\Models\Application\Employer');
    }

    //get all jobs
    public function jobs()
    {
        return $this->hasMany('App\Models\Application\Job');
    }

    //get all resumes
    public function resumes()
    {
        return $this->hasMany('App\Models\Application\Resume');
    }

    //relation with job_resume_user
    public function job_resume_user()
    {
        return $this->belongsTo('App\Models\Application\Job_resume_user');
    }

    //gell all bookmark of user
    public function bookmarks()
    {
        return $this->belongsToMany('App\Models\Application\Job');
    }
}
