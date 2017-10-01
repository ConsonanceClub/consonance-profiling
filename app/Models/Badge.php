<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    protected $fillable = ['name', 'icon_url',];

    function user(){
        return $this->belongsToMany('User');
    }
}
