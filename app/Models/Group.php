<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'icon_url', 'active',];

    public function posts(){

        return $this->hasMany('App\Models\Post');

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }




}
