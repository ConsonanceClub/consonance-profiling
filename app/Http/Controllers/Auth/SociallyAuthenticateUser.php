<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 12:22 PM
 */

namespace App\Http\Controllers\Auth;
use app\Providers\UserServiceProvider;
use Illuminate\Http\Request;
use Laravel\Socialite\One\User;
use Laravel\Socialite\Two\InvalidStateException;
use Mockery\Exception;
use Socialite;

class SociallyAuthenticateUser
{
    public $driver;

    public function execute($request = null){

        if($request == null){
            return $this->userNeedsAuthentication($this->driver);
        }
        try{
            $user = Socialite::driver($this->driver)->user();

            if($user = $this->userIsAuthenticable($user)){
                return $this->authenticateUser($user);
            }

        }catch (InvalidStateException $exception){
            return redirect(`auth/login/{$this->driver}`);
        }catch (Exception $exception){
            return redirect('/');
        }

        return redirect(route('home'))->with('Error authenticating user.');
    }


    private function userNeedsAuthentication($driver){
        return $this->redirectToProvider($driver);
    }

    private function userIsAuthenticable($user){
        $authenticatedUser = UserServiceProvider::getUserDetails($user,$this->driver);

        if($authenticatedUser instanceof User){
            return $authenticatedUser;
        }

        return false;
    }

    private function authenticateUser($user){
        if(!Auth::check()) {
            Auth::login($user);
        }

        return redirect(route('activity'));
    }

    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
}