<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 1:14 PM
 */

namespace App\Providers;

class SocialServiceProvider
{

    public static function getSocialProvider($driver,$user){
        switch ($driver){
            case 'github':
                return static::gitHub($user);
                break;
            case 'linkedin':
                return static::linkedIn($user);
                break;
        }
    }

    private static function gitHub($user){
        return new GithubServiceProvider($user);
    }

    private static function twitter($user){
        return new TwitterServiceProvider($user);
    }

    private static function linkedIn($user){
        return new LinkedInServiceProvider($user);
    }


}
