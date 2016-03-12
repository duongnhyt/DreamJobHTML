<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    //table name
    protected $table = 'employers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    //get users
    public function uses()
    {
        return $this->belongsTo('App\Models\Application\User');
    }

    //many fields
    public function fields()
    {
        return $this->belongsToMany('App\Models\Application\Field');
    }
}
