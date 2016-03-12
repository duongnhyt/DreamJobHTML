<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //table name
    protected $table = 'cities';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //get all resume
    public function resumes()
    {
        return $this->hasMany('App\Models\Application\Resume');
    }

    //get all post
    public function jobs()
    {
        return $this->hasMany('App\Models\Application\Job');
    }
}
