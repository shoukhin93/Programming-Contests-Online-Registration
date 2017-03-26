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
Route::get('home', function () {
    return view('Home.home');
});

Route::get('main', function () {
    return view('main');
});

Route::get('user_registration', function () {
    return view('Registration.user_registration');
});

Route::get('/', function () {
    return view('Home.home');
});

Route::get('profile', function () {
    return view('profile.profile');
});


Route::get('arrange_contest', function () {
    return view('ManageContest.addContest');
});

Route::get('edit_profile', function () {
    return view('profile.profileUpdate');

});

Route::get('edit_contest', function () {
    return view('ManageContest.edit_contest');

});

Route::get('contest_registration', function () {
    return view('ManageContest.contest_registration');

});

Route::get('member_request', function () {
    return view('Registration.member_request');
});

Route::get('registered_team',function(){
	return view('Lists.registered_team');
});

Route::get('contests',function(){
	return view('Lists.contests');
