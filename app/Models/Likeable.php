<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Likeable extends Model
{
    //

    use SoftDeletes;

    protected $guarded = [];

    public function posts()
    {
        return $this->morphedByMany('App\Models\Post', 'likeable');
    }

    public function activities()
    {
        return $this->morphedByMany('App\Models\Activity', 'likeable');
    }
}
