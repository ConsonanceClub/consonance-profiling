<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 12:22 PM
 */

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Two\InvalidStateException;
use Mockery\Exception;
use Socialite;

class SociallyAuthenticateUser
{
    public $driver;

    public function execute($request = null){

        if($request == null)
            return $this->needsAuthentication();
        try{
            $user = Socialite::driver($this->driver)->user;
            return $user;

        }catch (InvalidStateException $exception){
            return redirect(`auth/login/{$this->driver}`);
        }catch (Exception $exception){
            return redirect('/');
        }

        return '';
    }

    private function needsAuthentication(){
        return '';
    }
}