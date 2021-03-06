<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\running_contest;
use App\User;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getContestRegistration()
    {
         return view('ManageContest.addContest')->with("error","");
    }

    public function getEditContest()
    {
         return view('ManageContest.edit_contest')->with("error","");
    }

    public function postContestRegistration(Request $request)
    {
        //error check
         $check = running_contest::where('contest_name',$request["contestName"])->first();
         if(!empty($check))
             return view('ManageContest.addContest')->with('error', "The Contest Name Already Exists !!");
        else if($request["contestName"] == "" || $request["startDate"] == "" || $request["startTime"] == ""
            || $request["endTime"] == "" || $request["closeDate"] == "" || $request["closeTime"] == ""
            || $request["description"] == "")
        {
             return view('ManageContest.edit_contest')->with("error", "All Inputs Are Required !!");
        }
        
         //inserting db
         $contestRegistrationDb = new running_contest;
         $contestRegistrationDb->contest_name=$request["contestName"];
         $contestRegistrationDb->contest_date=$request["startDate"];
         $contestRegistrationDb->contest_start=$request["startTime"];
         $contestRegistrationDb->contest_end=$request["endTime"];
         $contestRegistrationDb->reg_close_date=$request["closeDate"];
         $contestRegistrationDb->reg_close_time=$request["closeTime"];
         $contestRegistrationDb->description=$request["description"];
         $contestRegistrationDb->save();
         return redirect()->action('AdminController@getContestRegistration');
    }

    public function postEditContest(Request $request)
    {
        //error check
         $check = running_contest::where('contest_name',$request["contestName"])->first();
        //return (count($check));
        if(count($check) == 0)
             return view('ManageContest.edit_contest')->with("error", "There are no contest that matches the input !!");
        
        else if($request["contestName"] == "" || $request["startDate"] == "" || $request["startTime"] == ""
            || $request["endTime"] == "" || $request["closeDate"] == "" || $request["closeTime"] == ""
            || $request["description"] == "")
        {
             return view('ManageContest.edit_contest')->with("error", "All Inputs Are Required !!");
        }
        
        $check = running_contest::where('contest_name',$request["contestName"])->update(['contest_date' => $request["startDate"],
                                                                                        'description' => $request["description"],
                                                                                        'contest_start' => $request["startTime"],
                                                                                        'contest_end' => $request["endTime"],
                                                                                        'reg_close_date' => $request["closeDate"],
                                                                                        'reg_close_time' => $request["closeTime"],
                                                                                        'description' => $request["description"]]);
    

         return redirect()->action('AdminController@getEditContest');
    }

    // This Function Return all Member request view
    public function getMemberRequest(){
        $users = User::where('status', '=', false)->paginate(4);
        return view('Registration.member_request')->with('users',$users);
    }
    //This Function accept or delete a member
    public function updateMemberRequest(Request $request){
        $id= $request->id;
        $action=$request->action;
        $dbVar= User::find($id);

        if($action=="accept"){
            $dbVar->status=true;
            $dbVar->save();
        }
        else if($action=="remove"){
            $dbVar->delete();
        }
         return redirect()->back();
    }
}