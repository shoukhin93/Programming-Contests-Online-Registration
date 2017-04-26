<?php

namespace App\Http\Controllers;

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
        /* $this->validate($request, [
             'CuttingWastage' => 'nullable|numeric',
             'ExtraLoading' => 'nullable|numeric',
             'RelaxingShrinkage' => 'nullable|numeric',
             'WashingWastage' => 'nullable|numeric',
         ]);*/

        $student = account::where('student_id', '=', $request["userID"])->get();

        //echo $student;


        $account = null;

        if ($student != "") {
            $account = new account;
            $account->student_id = $request["userID"];
            $account->password = $request["password1"];
            $account->email = $request["email"];
            $account->fname = $request["userFirstName"];
            $account->lname = $request["userLastName"];
            $account->year = $request["studentYear"];
            $account->phone = $request["userContactNo"];
            $account->gender = $request["gender"];
            $account->save();
        }

        echo $account;

        //return redirect()->action('RegistrationController@user_registration');
    }
}
