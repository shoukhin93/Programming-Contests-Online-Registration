<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $id=Auth::user()->student_id;
        $dbVar=User::find($id);
        $hashedPassword=$dbVar->password;

        $this->validate($request,[
            'old_password' => 'required|max:15|min:6',
            'password' => 'required|max:15|min:6|confirmed',
        ]);

        if (Hash::check($request->old_password, $hashedPassword)) {
            $dbVar->password=bcrypt($request['password']);
            $dbVar->save();
            return redirect()->route('viewProfile',$id);
        }

        //Here just send a flush message for invalid old password
        $request->session()->flash('no_match', 'Invalid Old Password');

        return redirect()->back();
    }

    //storing Profile Picture
    public function StorePic(Request $request){

        $this->validate($request,[
            'fileToUpload' => 'required|image|mimes:jpeg,jpg,png|max:2500',
        ]);

        $file = $request->file('fileToUpload');
        $id=Auth::user()->student_id;
        $dbVar=User::find($id);
        $destinationPath="profilePicture";
        $fileName=$id.'.'.$file->getClientOriginalExtension();
        $uploadSuccess = $file->move($destinationPath, $fileName);
        if($uploadSuccess){
            $dbVar->img=$destinationPath.'/'.$fileName;
            $dbVar->save();
            return redirect()->route('viewProfile',$id);
        }
        //Here just send a flush message for for someting wrong for storing picture
        $request->session()->flash('wrong', 'Something Went Wrong. Please Try Latter');

        return redirect()->back();
    }

    public function getNotification(){
        return view('profile.notifications');
    }
    
}
