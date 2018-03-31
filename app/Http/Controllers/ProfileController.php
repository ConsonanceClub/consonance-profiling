<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    /**
     * Displays a user's profile page
     * @param Request: Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request = null)
    {
        return view('profile');
    }

    
}