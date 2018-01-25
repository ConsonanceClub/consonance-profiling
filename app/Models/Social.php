<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 7:53 PM
 */

namespace app\Models;


class Social
{
    private $firstName;
    private $lastName;
    private $userName;
    private $email;
    private $bio;
    private $url;
    private $avatar;

    public function __construct($user,$firstName, $lastName, $email, $username, $url,$avatar,$bio)
    {
        $user = $user->user;
        $this->firstName = (is_array($firstName))?explode(' ',$user['name'])[0]:$user[$firstName];
        $this->lastName = (is_array($lastName))?explode(' ',$user['name'])[1]:$user[$lastName];
        $this->userName = $user[$username];
        $this->email = $user[$email];
        $this->url = $user[$url];
        $this->avatar = $user[$avatar];
        $this->bio = $user[$bio];
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