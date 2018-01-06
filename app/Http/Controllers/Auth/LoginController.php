<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     * @param $driver
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @param $driver
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();

        return $user;
    }

    public function postLogin()
    {
        $user = [];

        $input = Input::get('username');
        if ($this->is_email($input)) {
            $user = array(
                'email'=>Input::get('username'),
                'password'=>Input::get('password')
            );
        } else {
            $user = array(
                'username'=>Input::get('username'),
                'password'=>Input::get('password')
            );
        }

        $randomPosts = Post::where('id','>',0)->orderBy('id','DESC')->paginate(8);

        if (Auth::attempt($user)) {
            return Redirect::to('index')
                ->with('message','You are logged in')
                ->with('posts',$randomPosts)
                ->with('user',$user);
        } else {
            return Redirect::to('login')
                ->with('message','Incorrect user combination')
                ->withInput();
        }
    }
}
