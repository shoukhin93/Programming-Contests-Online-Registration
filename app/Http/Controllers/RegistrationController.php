<?php

namespace App\Http\Controllers;

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

        return redirect()->action('RegistrationController@user_registration')->with('error', 'error');
    }
}
