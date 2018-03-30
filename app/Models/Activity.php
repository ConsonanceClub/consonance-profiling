<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'image_url',
    ];

    function user(){
        return $this->belongsTo('App\User');
    }

    function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
