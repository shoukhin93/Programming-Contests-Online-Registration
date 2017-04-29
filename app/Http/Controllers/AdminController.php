<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\running_contest;

class AdminController extends Controller
{
    public function getContestRegistration()
    {
         return view('ManageContest.addContest')->with("error","");
    }

    public function postContestRegistration(Request $request)
    {
        //error check
         $check = running_contest::where('contest_name',$request["contestName"]);
         if(!empty($check))
         {
             $errors = "The Contest Name Already Exists";
             return view('ManageContest.addContest')->with('error', "The Contest Name Already Exists !!");
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

    function errorCheck(Request $request)
    {
        //for error check
       
    }
}