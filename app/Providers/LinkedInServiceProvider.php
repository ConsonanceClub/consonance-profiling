<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 1/13/18
 * Time: 7:45 PM
 */

namespace app\Providers;


use App\Models\Social;

class LinkedInServiceProvider extends Social
{

    public function __construct($user)
    {
        parent::__construct($user,
            'firstName',
            'lastName',
            'emailAddress',
            'firstName',
            'publicProfileUrl',
            'pictureUrl',
            'headline');
    }

}

