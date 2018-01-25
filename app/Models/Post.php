<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'image_url',
    ];

    function group(){

        return $this->belongsTo('App\Models\Post');
    }

    function user(){

        return $this->belongsTo('App\User');

    }
}
