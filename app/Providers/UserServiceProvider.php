<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 2:38 PM
 */

namespace app\Providers;

use App\Providers\SocialServiceProvider;
use App\User;

class UserServiceProvider
{

    public static function createUser($userDetails, $driver){
        $user = new User();
        $user->first_name = $userDetails['first_name'];
        $user->last_name = $userDetails['last_name'];
        $user->short_bio = $userDetails['bio'];
        $user->email = $userDetails['email'];
        $user->username = $userDetails['username'];
        if($driver == 'github'){
            $user->github_url = $userDetails['github_url'];
        }else if($driver == 'twitter'){
            $user->twitter_url = $userDetails['twitter_url'];
        }else if($driver == 'linkedin'){
            $user->linkedin_url = $userDetails['linkedin_url'];
        }
        $user->avatar = $userDetails['avatar'];

        $user->save();
        return $user;
    }

    public static function userExists($userDetails){

        return true;
    }
}