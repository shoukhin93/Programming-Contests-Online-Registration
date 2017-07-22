<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:admin',['except' => 'logout']);
    }

    public function ShowLogInForm(){
    	return view('Auth.adminLogin');
    }
    
    public function Login(Request $request){
    	$this->validate($request,[
    		'admin_id' => 'required|max:15',
    		'password' =>  'required|min:6'
    		]);

    	if(Auth::guard('admin')->attempt(['admin_id' => $request->admin_id,'password' => $request->password],$request->remember)){
			return redirect('/');
    	}

        $request->session()->flash('admin_no_match', 'These credentials do not match our records.');

    	return redirect()->back();
    }
	public function logout(Request $request)
	{
		Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

		return redirect('/');
	}
}
