<?php

namespace App\Http\Controllers;

use App\Models\UserInterests;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    /**
     * Displays a user's profile page
     * @param Request: Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */

    protected $profile;

    public function __construct()
    {
        $this->profile = new Profile();
    }

    public function index(Request $request = null)
    {
        return view('profile');
    }

    public function updateProfile(Request $request){

        $name = $request->get('name');
        $bio = $request->get('bio');
        $email = $request->get('email');
        $interest = $request->get('interests');
        $school = $request->get('school');

        $details_response = $this->profile->updateUserDetails($name, $bio, $email, $school);
        $profile_response = $this->profile->updateUserInterests($interest);

        if( $details_response && $profile_response){
            return json_encode(true);
        }


        return json_encode(false);
    }


    
}