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

    public function __construct($user, $name, $email, $username, $url,$avatar,$bio)
    {
        $innerUser = isset($user->user)?$user->user:null;
        $name = isset($user[$name])?explode(' ',$user[$name]):['',''];
        $this->firstName = $name[0];
        $this->lastName = $name[1];
        $this->userName = isset($user[$username])?$user[$username]:'';
        $this->email = isset($user[$email])?$user[$email]:'';
        if(!is_null($innerUser)){
            $this->url = $innerUser[$url];
            $this->avatar = $user[$avatar];
            $this->bio = $user[$bio];
        }
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