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

    public static function gitHub($user){
        return new class($user){

            private $firstName;
            private $lastName;
            private $userName;
            private $email;
            private $bio;
            private $url;
            private $avatar;


            public function __construct($user)
            {
                $user = $user->user;
                $this->firstName = explode(' ',$user['name'])[0];
                $this->lastName = explode(' ',$user['name'])[1];
                $this->email = $user['email'];
                $this->url = $user['url'];
                $this->avatar = $user['avatar_url'];
                $this->bio = $user['bio'];
            }

            public function getFirstName(){
                return $this->firstName;
            }

            public function getLastName(){
                return $this->lastName;
            }

            public function getUserName(){
                return $this->userName;
            }

            public function getEmail(){
                return $this->email;
            }

            public function getBio(){
                return $this->bio;
            }

            public function getUrl(){
                return $this->url;
            }

            public function getAvatar(){
                return $this->avatar;
            }
        };
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

$user = SocialServiceProvider::gitHub('hey');
$user2 = SocialServiceProvider::twitter('hjhk');
print $user->getName();
print $user2->getName();