<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    //
    protected $guarded = [];

    public function post(){

        return $this->belongsTo('App\Models\Post');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
}
