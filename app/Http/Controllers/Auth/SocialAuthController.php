<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\SociallyAuthenticateUser;

class SocialAuthController extends Controller
{
    //social auth drivers
    protected $drivers = ['github', 'twitter', 'linkedin'];

    public function login($driver, Request $request){
        if(!$this->checkDriver($driver))
            return response('Page not found', 404);

        $authUser = new SociallyAuthenticateUser();
        $authUser->driver = $driver;
        return $authUser->execute($request);
    }

    public function loginUserViaDriver($driver, Request $request){
        if(!$this->checkDriver($driver))
            return response('Page not found', 404);

        $authUser = new SociallyAuthenticateUser();
        $authUser->driver = $driver;
        return $authUser->execute();
    }

    public function logout(){
        Auth::logout();
        return Redirect::route('/');
    }

    private function checkDriver($driver){
        if(in_array($driver,$this->drivers))
            return true;
        return false;
    }
}
