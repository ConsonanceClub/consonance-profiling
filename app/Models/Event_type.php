<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event_type extends Model
{
    protected $fillable = ['name'];

    function event(){
        return $this->hasMany('Event');
    }
}
