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

    public function gitHub($user){
        return new GithubServiceProvider($user);
    }

    public static function twitter($user){
        return new class($user){
            private $user;

            public function __construct($user)
            {
                $this->user = $user;
            }

        };
    }


}
