<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SocialAuthenticationController extends Controller
{
    //list of drivers for social authentication
    protected $providers = [
        //'github' => Laravel\Socialite\SocialiteServiceProvider::class,
    ];
}
