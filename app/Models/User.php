<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usename',
        'first_name',
        'last_name',
        'email',
        'password',
        'short_bio',
        'medium_username',
        'instagram_username',
        'twitter_username',
        'github_username',
        'slack_username',
        'school_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function role(){
        return $this->belongsTo('App\Models\Role');
    }

    function badge(){
        return $this->belongsToMany('Badge');
    }

    function interest(){
        return $this->belongsToMany('Interest');
    }

    public function posts(){

        return $this->hasMany('App\Models\Post');
    }

    public function isAdmin(){

        if( $this->role->name == 'Administrator' && $this->active == 1){

            return true;

        }

        return false;
    }

    function school(){
        //return $this->hasOne('App\Models\School', 'id');
    }
}
