<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project_status extends Model
{
    protected $fillable = ['name',];

    function project(){
        return $this->hasMany('Project');
    }
}
