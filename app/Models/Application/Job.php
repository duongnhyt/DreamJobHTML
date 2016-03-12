<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //table name
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many postion
    public function positions()
    {
        return $this->belongsToMany('App\Models\Application\Position');
    }

    //many to many skill
    public function skills()
    {
        return $this->belongsToMany('App\Models\Application\Skill');
    }

    //many to many it_skills
    public function it_skills()
    {
        return $this->belongsToMany('App\Models\Application\ITSkill');
    }

    //many to many certificate
    public function certificates()
    {
        return $this->belongsToMany('App\Models\Application\Certificate');
    }

    //get a city
    public function cities()
    {
        return $this->belongsTo('App\Models\Application\City');
    }
}
