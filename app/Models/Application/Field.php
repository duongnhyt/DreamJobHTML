<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    //table name
    protected $table = 'fields';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many with employers
    public function employers()
    {
        return $this->belongsToMany('App\Models\Application\Employer');
    }

    //get all resumes with expectedField
    public function expected_field()
    {
        return $this->hasMany('App\Models\Application\Resume');
    }

    //many to many with resume
    public function resumes()
    {
        return $this->belongsToMany('App\Models\Application\Resume');
    }


}
