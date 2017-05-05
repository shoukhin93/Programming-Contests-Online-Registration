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
    return view('Home.home');
});

Route::get('main', function () {
    return view('main');
});

// Route::get('user_registration', 'RegistrationController@user_registration');
// Route::post('/register_user', 'RegistrationController@register_user');

// Route::post('/login', 'LoginController@login');

//Route::get('/', 'HomeController@showHome');
// Profile Route Section...
Route::get('/{id}','ProfileController@ViewProfile')->where('id' , '[0-9]+');
Route::get('edit_profile','ProfileController@EditProfile');
Route::post('StorePic','ProfileController@StorePic');
//End Pfrofile Route...



Route::get('notifications', function () {
    return view('profile.notifications');
});

//Admin Route Section
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@ShowLogInForm');
	Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::get('/arrange_contest','AdminController@getContestRegistration');
	Route::post('/arrange_contest','AdminController@postContestRegistration');
	Route::get('/edit_contest','AdminController@getEditContest');
	Route::post('/edit_contest','AdminController@postEditContest');
	Route::get('/member_request','AdminController@getMemberRequest');
	Route::post('/member_request','AdminController@updateMemberRequest');
	Route::post('/logout','Auth\AdminLoginController@logout');

});



//End Admin Route Section

Route::get('contest_registration','TeamRegistrationController@getUserRegistration');
Route::post('contest_registration','TeamRegistrationController@postUserRegistration');



Route::get('registered_team', function () {
    return view('Lists.registered_team');
})->name('registered_team');

Route::get('/contest_result', 'ListController@getResults');

Route::get('contests', function () {
    return view('Lists.contests');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
