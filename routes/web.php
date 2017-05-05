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
Route::get('/{id}','ProfileController@ViewProfile')->where('id' , '[0-9]+')->name('viewProfile');
Route::get('edit_profile','ProfileController@EditProfile')->name('editProfile');
Route::post('StorePic','ProfileController@StorePic')->name('savePicture');
Route::get('notifications','ProfileController@getNotification')->name('getNotification');
//End Pfrofile Route...

//Admin Route Section
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@SowLogInForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');
	Route::get('/arrange_contest','AdminController@getContestRegistration')->name('admin.arrange_contest');
	Route::post('/arrange_contest','AdminController@postContestRegistration')->name('admin.arrange_contest.submit');
	Route::get('/edit_contest','AdminController@getEditContest')->name('admin.edit_contest');
	Route::post('/edit_contest','AdminController@postEditContest')->name('admin.edit_contest.submit');
	Route::get('/member_request','AdminController@getMemberRequest')->name('admin.member_request');
	Route::post('/member_request','AdminController@updateMemberRequest')->name('admin.member_request.submit');
	Route::get('/','AdminController@index')->name('admin');
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
