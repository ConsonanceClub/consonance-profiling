<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'description',];

    function category(){
        return $this->belongsTo('Category');
    }
}
