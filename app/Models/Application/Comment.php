<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //table name
    protected $table = 'comments';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //get jobs of comment
    public function jobs()
    {
        return $this->belongsTo('App\Models\Application\Job');
    }
}
