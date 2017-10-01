<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_url',
    ];

    function category(){
        return $this->belongsTo('Category');
    }

    function user(){
        return $this->belongsTo('User');
    }
}
