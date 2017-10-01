<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = ['name',];

    function project(){
        return $this->hasMany('Project');
    }
}
