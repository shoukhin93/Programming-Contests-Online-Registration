<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function SowLogInForm(){
    	return view('Auth.adminLogin');
    }
    
    public function Login(Request $request){
    	$this->validate($request,[
    		'admin_id' => 'required|max:15',
    		'password' =>  'required'
    		]);

    	if(Auth::guard('admin')->attempt(['admin_id' => $request->admin_id,'password' => $request->password],$request->remember)){
    		return redirect()->intended(route('admin'));
    	}
    	return redirect()->back();
    }
}
