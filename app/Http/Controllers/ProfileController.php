<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => 'ViewProfile']);
    }

	//profile view
	public function ViewProfile($id){
        $dbVar=User::find($id);

        if($dbVar){
            return view('profile.profile')->with('Personal',$dbVar);
        }else{
            return "The account Dosent Exists";
        }
	}

    //edit Profile view.
    public function getEditProfile(){
        $id=Auth::user()->student_id;
        $dbVar=User::find($id);
    	return view('profile.profileUpdate')->with('Personal',$dbVar);
    }

    //Update Profile Info
    public function EditProfile(Request $request){
        return $request->all();
    }

    //Update User Password
    public function UpdatePassword(Request $request){
        return $request->all();
    }

    //storing Profile Picture
    public function StorePic(Request $request){
        return $request->all();
    }

    public function getNotification(){
        return view('profile.notifications');
    }
    
}
