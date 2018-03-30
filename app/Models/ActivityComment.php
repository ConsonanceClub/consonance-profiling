<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityComment extends Model
{
    //
    protected $guarded = [];

    public function activity(){

        return $this->belongsTo('App\Models\Activity');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }

}
