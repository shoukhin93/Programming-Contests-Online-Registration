<?php

namespace App\Http\Controllers;

use App\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $isValidUser = account::where('student_id', '=', $request["userLoginID"]) ->first();

        if($isValidUser &&  Hash::check($request["userLoginPassword"], $isValidUser->password))
            echo "login successful";
        else
            echo "invalid data";
    }
}
