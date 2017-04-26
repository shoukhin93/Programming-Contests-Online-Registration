<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Validator;
use App\account;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function user_registration()
    {
        return view('Registration.user_registration');
    }

    public function register_user(Request $request)
    {

        //form validation rules
        $rules = array(
            'student_id' => 'required|unique:accounts|max:8|min:8',
            'password1' => 'required|max:15|min:6',
            'password2' => 'required|max:15|min:6|same:password1',
            'userFirstName' => 'required|max:15',
            'userLastName' => 'required|max:15',
            'studentYear' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:accounts',
            'userContactNo' => 'required|numeric',
        );

        //error messages
        $messages = array('same' => 'The password must be matched');

        //validating form
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('user_registration')
                ->withErrors($validator)
                ->withInput($request->all());

        } else {
            $account = new account;
            $account->student_id = $request["student_id"];
            $account->password = Hash::make($request["password1"]);
            $account->email = $request["email"];
            $account->fname = $request["userFirstName"];
            $account->lname = $request["userLastName"];
            $account->year = $request["studentYear"];
            $account->phone = $request["userContactNo"];
            $account->gender = $request["gender"];
            $account->save();
        }

        return redirect('user_registration');
    }
}
