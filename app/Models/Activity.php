<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Activity extends Model
{
    //
    protected $appends = array('isLiked', 'totalLikes');

    protected $fillable = [
        'title',
        'body',
        'image_url',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    function user(){
        return $this->belongsTo('App\User');
    }

    function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function activity_comments(){

        return $this->hasMany('App\Models\ActivityComment');

    }

    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getTotalLikesAttribute() {

        return $this->likes()->count();
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();

        return (! is_null($like)) ? true : false;
    }

}
