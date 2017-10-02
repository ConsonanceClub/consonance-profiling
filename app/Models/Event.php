<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image_url',
    ];

    function event_type(){
        return $this->belongsTo('Event_type');
    }

    function role(){
        return $this->belongsTo('Role');
    }
}
