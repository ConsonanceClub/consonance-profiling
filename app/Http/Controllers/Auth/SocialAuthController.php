<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\SociallyAuthenticateUser;

class SocialAuthController extends Controller
{
    //social auth drivers
    protected $drivers = ['github', 'twitter', 'linkedin'];

    public function execute($driver, Request $request){
        if(!$this->checkDriver($driver))
            return response('Page not found', 404);

        $authUser = new SociallyAuthenticateUser();
        $authUser->driver = $driver;

        $user =\Socialite::driver($driver)->user();
        dump ($user->user);
        //return $authUser->execute($request);
    }

    private function checkDriver($driver){
        if(in_array($driver,$this->drivers))
            return true;
        return false;
    }
}
