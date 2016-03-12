<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Job_seeker extends Model
{
    //table name
    protected $table = 'job_seekers';
    protected $primaryKey = 'id';
    public $timestamps = false;
    //get users
    public function uses()
    {
        return $this->belongsTo('App\Models\Application\User');
    }
}
