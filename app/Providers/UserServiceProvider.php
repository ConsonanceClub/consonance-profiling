<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 2:38 PM
 */

namespace App\Providers;

use app\Models\Social;
use App\Providers\SocialServiceProvider;
use App\User;

class UserServiceProvider
{

    private static function createUser(Social $socialDetails, $driver){
        $user = new User();
        $user->first_name = $socialDetails->getFirstName();
        $user->last_name = $socialDetails->getLastName();
        $user->short_bio = $socialDetails->getBio();
        $user->email = $socialDetails->getEmail();
        $user->username = $socialDetails->getUserName();
        if($driver == 'github'){
            $user->github_url = $socialDetails->getUrl();
        }else if($driver == 'twitter'){
            $user->twitter_url = $socialDetails->getUrl();
        }else if($driver == 'linkedin'){
            $user->linkedin_url = $socialDetails->getUrl();
        }
        $user->avatar = $socialDetails->getAvatar();

        $user->save();
        return $user;
    }

    public static function getUserDetails($user, $driver){
        
        $socialDetails = SocialServiceProvider::getSocialProvider($driver,$user);

        $email = $socialDetails->getEmail();

        if(!is_null($email)){
            $existingUser = User::where('email', $email)->first();
        }else $existingUser = null;

        if($existingUser instanceof User){
            return $existingUser;
        }{
            $existingUser = static::createUser($socialDetails, $driver);
        }

        return $existingUser;
    }
}