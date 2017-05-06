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

         $this->validate($request,[
            'userFirstName' => 'required|max:15',
            'userLastName' => 'required|max:15',
            'studentYear' => 'required',
            // 'gender' => 'required',
            //'email' => 'required|unique:accounts',
            'userContactNo' => 'required|numeric',
        ]);

        $id=Auth::user()->student_id;
        $dbVar=User::find($id);
        $dbVar->fname=$request['userFirstName'];
        $dbVar->lname=$request['userLastName'];
        $dbVar->year=$request['studentYear'];
        // $dbVar->gender=$request[''];
        $dbVar->phone=$request['userContactNo'];
        $dbVar->save();

        return redirect()->route('viewProfile',$id);
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
