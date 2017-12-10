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

Route::get('/', function () {
    return view('signIn');
});

Route::get('/member/sign-in', function () {
    return view('signIn');
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/members', function () {
    return view('members');
});

Route::get('/getMembers', 'MembersController@getAllMembers');
