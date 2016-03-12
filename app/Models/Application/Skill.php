<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //table name
    protected $table = 'skills';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many job
    public function jobs()
    {
        return $this->belongsToMany('App\Models\Application\Job');
    }
}
