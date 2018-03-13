<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;


Route::group(['middleware' => ['web']], function (){

    Route::get('/sign-in', function (){
        return view('auth.register');
    });
    Route::get('/groups', function (){
        return view('groups');
    });
    Route::get('/group-view', function (){
        return view('group-view');
    });
    Route::get('/', function (){
        return view('home');
    });
    Route::get('/signIn', function () {
        return view('signIn');
    });
    Route::get('/log-in', function () {
        return view('logIn');
    });

    Route::get('/member/sign-in',[ 'as'=>'member.sign-in', function () {
        return view('signIn');
    }]);

    Route::get('/member/sign-up',[ 'as'=>'member.sign-up', function () {
        return view('signUp');
    }]);

    Route::get('/activity', function () {
        return view('activity');
    });

    Route::get('/members', function () {
        return view('members');
    });

    Route::get('/getMembers', 'MembersController@getAllMembers');

    Auth::routes();

    Route::get('/profile', 'ProfileController@index')->name('profile');

    Route::get('/projects', 'ProjectController@index')->name('profile');

    Route::get('/welcome/member',[
        'uses' => 'Auth\SocialAuthenticationController@welcome',
        'as' => 'welcome'
    ]);


    Route::get('auth/login/{driver}',[
        'uses' => 'Auth\LoginController@redirectToProvider',
        'as' => 'social.auth'
    ]);

    Route::get('auth/login/{driver}/callback',[
        'uses' => 'Auth\LoginController@handleProviderCallback',
        'as' => 'social.callback'
    ]);


    Route::get('/auth/github/login/accepted', [
        'uses' => 'Auth\SocialAuthenticationController@execute',
        'as' => ''
    ]);
});






Route::group(['middleware' => 'admin', 'namespace'=>'Admin'], function (){

    Route::resource('admins/admin', 'AdminUsersController');

    Route::resource('admins/category', 'CategoryController');

    Route::resource('admin/activity', 'ActivityController');

    Route::resource('admin/group', 'GroupController');

    Route::get('admin/post/{group}', 'PostController@index')->name('post.index');

    Route::get('admin/post/create/{group}', 'PostController@create')->name('post.create');

    Route::post('admin/post/{group}', 'PostController@store')->name('post.store');

    Route::get('admin/post/edit/{post}', 'PostController@edit')->name('post.edit');

    Route::patch('admin/post/edit/{post}', 'PostController@update')->name('post.update');

    Route::delete('admin/post/delete/{post}', 'PostController@delete')->name('post.destroy');


});
