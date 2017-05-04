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
            'userFirstName' => 'required|max:15',
            'userLastName' => 'required|max:15',
            'studentYear' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:accounts',
            'userContactNo' => 'required|numeric',
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
            'fname' => $data['userFirstName'],
            'lname' => $data['userLastName'],
            'year' => $data['studentYear'],
            'phone' => $data['userContactNo'],
            'gender' => $data['gender'],
        ]);
    }
}
