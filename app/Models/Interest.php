<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = ['name', 'description'];

    function user(){
        return $this->belongsToMany('User');
    }
}
