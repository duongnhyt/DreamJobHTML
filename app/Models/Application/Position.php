<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //table name
    protected $table = 'positions';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many job
    public function jobs()
    {
        return $this->belongsToMany('App\Models\Application\Job');
    }

    //many to many resumes
    public function resumes()
    {
        return $this->belongsToMany('App\Models\Application\Resume');
    }
}
