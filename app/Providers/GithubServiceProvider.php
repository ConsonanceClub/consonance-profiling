<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 5:46 PM
 */

namespace app\Providers;


use App\Models\Social;

class GithubServiceProvider extends Social
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

        parent::__construct($user,
            $user,
            $user,
            'email',
            'username',
            'url',
            'avatar_url',
            'bio');

    }


}