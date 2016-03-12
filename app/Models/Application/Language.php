<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //table name
    protected $table = 'languages';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //many to many resumes
    public function resumes()
    {
        return $this->belongsToMany('App\Models\Application\Resume');
    }
}
