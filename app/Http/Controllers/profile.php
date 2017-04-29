<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\account;

class profile extends Controller
{

	//profile view
	public function ViewProfile($id){
        $dbVar=account::where('student_id','=',$id)->first();

        if($dbVar){
            return view('profile.profile')->with('Personal',$dbVar);
        }else{
            return "The account Dosent Exists";
        }
	}

    //edit Profile view.
    public function EditProfile(){
    	return view('profile.profileUpdate');
    }

    //storing Profile Picture
    public function StorePic(Request $request){
        return $request;
    }
    
}
