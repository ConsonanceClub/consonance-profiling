<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description',];

    function tag(){
        return $this->hasMany('Tag');
    }

    function post(){
        return $this->hasMany('Post');
    }

    function project(){
        return $this->hasMany('Project');
    }
}
