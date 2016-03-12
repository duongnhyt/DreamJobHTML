<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class ITSkill extends Model
{
    //table name
    protected $table = 'it_skills';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many job
    public function jobs()
    {
        return $this->belongsToMany('App\Models\Application\Job');
    }

    //many to many resume
    public function resumes()
    {
        return $this->belongsToMany('App\Models\Application\Resume');
    }
}
