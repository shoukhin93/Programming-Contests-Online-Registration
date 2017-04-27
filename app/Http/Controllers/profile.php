<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{

	//profile view
	public function profile(Request $request){

	}

    //edit Profile view.
    public function EditProfile(){
    	return view('profile.profileUpdate');
    }

    //storing Profile Picture
    public function StorePic(Request $request){

    }
    
}
