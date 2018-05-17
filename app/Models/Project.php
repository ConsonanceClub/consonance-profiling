<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];
    function project_status(){
        return $this->belongsTo('Project_status');
    }
    function label(){
        return $this->belongsTo('Label');
    }
    function category(){
        return $this->belongsTo('Category');
    }

}
