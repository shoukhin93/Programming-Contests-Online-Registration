<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'student_id' => 'required|unique:accounts|max:8|min:8',
            'password' => 'required|max:15|min:6|confirmed',
            'fname' => 'required|max:15',
            'lname' => 'required|max:15',
            'year' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:accounts',
            'phone' => 'required|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'student_id' => $data['student_id'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'year' => $data['year'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
        ]);
    }
}
