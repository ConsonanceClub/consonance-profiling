<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'image_url',
    ];

    protected $appends = array('isLiked', 'totalLikes');

    function group(){

        return $this->belongsTo('App\Models\Group');
    }

    public function post_comments(){

        return $this->hasMany('App\Models\PostComment');

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

    function user(){

        return $this->belongsTo('App\User');

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
