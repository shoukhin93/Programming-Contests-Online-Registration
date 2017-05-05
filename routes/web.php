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

// Route::get('user_registration', 'RegistrationController@user_registration');
// Route::post('/register_user', 'RegistrationController@register_user');

// Route::post('/login', 'LoginController@login');

Route::get('/', function () {
    return view('Home.home');
});

// Profile Route Section...
Route::get('/{id}','profile@ViewProfile')->where('id' , '[0-9]+');
Route::get('edit_profile','profile@EditProfile');
Route::post('StorePic','profile@StorePic');
//End Pfrofile Route...



Route::get('notifications', function () {
    return view('profile.notifications');
});

//Admin Route Section
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@SowLogInForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::get('/arrange_contest','AdminController@getContestRegistration')->name('admin.arrange_contest');
	Route::post('/arrange_contest','AdminController@postContestRegistration')->name('admin.arrange_contest.submit');
	Route::get('/edit_contest','AdminController@getEditContest')->name('admin.edit_contest');
	Route::post('/edit_contest','AdminController@postEditContest')->name('admin.edit_contest.submit');
	Route::get('/','AdminController@index')->name('admin');
});

// Route::get('admin/login','Auth\AdminLoginController@SowLogInForm')->name('admin.login');
// Route::post('admin/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
// Route::get('arrange_contest','AdminController@getContestRegistration')->name('admin.arrange_contest');
// Route::post('arrange_contest','AdminController@postContestRegistration')->name('admin.arrange_contest.submit');
// Route::get('edit_contest','AdminController@getEditContest')->name('admin.edit_contest');
// Route::post('edit_contest','AdminController@postEditContest')->name('admin.edit_contest.submit');
// Route::get('/admin','AdminController@index')->name('admin');
//End Admin Route Section

Route::get('contest_registration','TeamRegistrationController@getUserRegistration');
Route::post('contest_registration','TeamRegistrationController@postUserRegistration');

Route::get('member_request', function () {
    return view('Registration.member_request');
});

Route::get('registered_team', function () {
    return view('Lists.registered_team');
});

Route::get('/contest_result', 'ListController@getResults');

Route::get('contests', function () {
    return view('Lists.contests');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
