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
Route::get('/{id}','ProfileController@ViewProfile')->where('id' , '[0-9]+')->name('viewProfile');
Route::get('edit_profile','ProfileController@getEditProfile')->name('editProfile');
Route::post('edit_profile','ProfileController@EditProfile')->name('editProfile.submit');
Route::post('change_password','ProfileController@UpdatePassword')->name('change_password.submit');
Route::post('StorePic','ProfileController@StorePic')->name('savePicture');
Route::get('notifications','ProfileController@getNotification')->name('getNotification');
//End Pfrofile Route...



//Admin Route Section
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@ShowLogInForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/arrange_contest','AdminController@getContestRegistration');
Route::post('/arrange_contest','AdminController@postContestRegistration');
Route::get('/edit_contest','AdminController@getEditContest');
Route::post('/edit_contest','AdminController@postEditContest');
Route::get('/member_request','AdminController@getMemberRequest');
Route::post('/member_request','AdminController@updateMemberRequest')->name('request.action');

//End Admin Route Section

Route::get('contest_registration','TeamRegistrationController@getUserRegistration');
Route::post('contest_registration','TeamRegistrationController@postUserRegistration');


Route::get('registered_team','ListController@getTeams');

Route::get('/contest_result', 'ListController@getResults');

Route::get('contests', function () {
    return view('Lists.contests');
});

Auth::routes();


Route::get('profileGetdata','AutoCompleteController@profile');
