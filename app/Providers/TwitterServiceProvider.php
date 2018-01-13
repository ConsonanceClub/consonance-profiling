<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 6:14 PM
 */

namespace app\Providers;


class TwitterServiceProvider
{

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
        $this->userName = $user['username'];
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

}