<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInterests extends Model
{
    //

    protected $table = 'users_interests';

    protected $fillable = [
      'email',
      'interest'
    ];
}
