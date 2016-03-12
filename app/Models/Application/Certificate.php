<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    //table name
    protected $table = 'certificates';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many resumes
    public function resumes()
    {
        return $this->belongsToMany('App\Models\Application\Resume');
    }

    //many to many jobs
    public function jobs()
    {
        return $this->belongsToMany('App\Models\Application\Job');
    }
}
