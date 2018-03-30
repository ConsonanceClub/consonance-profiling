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

    public static function gitHub($user){
        return new GithubServiceProvider($user);
    }

    public static function twitter($user){
        return new TwitterServiceProvider($user);
    }

    public static function linkedIn($user){
        return new LinkedInServiceProvider($user);
    }


}
