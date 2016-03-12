<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //table name
    protected $table = 'resumes';
    protected $primaryKey = 'id';
    public $timestamps = false;

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

//many to many languages
    public function languages()
    {
        return $this->belongsToMany('App\Models\Application\Language');
    }

    //get a city
    public function cities()
    {
        return $this->belongsTo('App\Models\Application\City');
    }

    //get a position
    public function positions()
    {
        return $this->belongsTo('App\Models\Application\Position');
    }

    //get expected_field
    public function expected_field()
    {
        return $this->belongsTo('App\Models\Application\Field');
    }

    //get all users
    public function users()
    {
        return $this->belongsTo('App\Models\Application\User');
    }
}
