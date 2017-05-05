<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\account;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => 'ViewProfile']);
    }

	//profile view
	public function ViewProfile($id){
        $dbVar=account::find($id);

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

    public function getNotification(){
        return view('profile.notifications');
    }
    
}
