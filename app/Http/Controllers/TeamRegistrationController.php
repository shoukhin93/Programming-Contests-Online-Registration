<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User as account;
use App\team;
use App\invitation;

class TeamRegistrationController extends Controller
{
    public function getUserRegistration()
    {
         return view('ManageContest.contest_registration')->with("error","");
    }
    public function postUserRegistration(Request $request)
    {
        //server side validation
        $mem1 = account::find($request["mem1"]);
        $mem2 = account::find($request["mem2"]);
        $mem3 = account::find($request["mem3"]);
        $team_name = team::where('team_name',$request["team_name"])->first();
 
        $matchThese1 = ['status' => 'rejected', 'member_id' => $request["mem1"]];
        $matchThese2 = ['status' => 'rejected', 'member_id' => $request["mem2"]];
        $matchThese3 = ['status' => 'rejected', 'member_id' => $request["mem3"]];

        $isaccepted1 = invitation::where($matchThese1)->first();
        $isaccepted2 = invitation::where($matchThese2)->first();
        $isaccepted3 = invitation::where($matchThese3)->first();

        //check if user registered on website or not
        if(!count($mem1) || !count($mem2) || !count($mem3))
        {
            $error = "";
            if(!count($mem1))
                $error = "Member 1 is not registered !!";
            else if(!count($mem2))
                $error = "Member 2 is not registered !!";
            else if(!count($mem3))
                $error = "Member 3 is not registered !!";

            return view('ManageContest.contest_registration')->with("error",$error);
        }
        
        //check user already accepted any request or not
         if(count($isaccepted1) || count($isaccepted2) || count($isaccepted3))
        {
            $error = "";
            if(count($isaccepted1))
                $error = "Member 1 is already accepted another teams request !!";
            else if(count($isaccepted2))
                $error = "Member 2 is already accepted another teams request !!";
            else if(count($isaccepted3))
                $error = "Member 3 is already accepted another teams request !!";

            return view('ManageContest.contest_registration')->with("error",$error);
        }
               
        if(count($team_name))
            return view('ManageContest.contest_registration')->with("error","Team Name Already Exists !!");
        //validation ends
        
        $team_table = new team;
        $team_table->team_leader = $request["mem1"];
        $team_table->team_name = $request["team_name"];
        $team_table->mem2 = $request["mem2"];
        $team_table->mem3 = $request["mem3"];
        $team_table->save();

        $invitation = new invitation;
        $invitation->team_name = $request["team_name"];
        $invitation->member_id = $request["mem1"];
        $invitation->status = "accepted";
        $invitation->save();
        //user created team so other invitations will be cancelled
        $some = invitation::where("team_name",'!=',$request["team_name"])->where("member_id",$request["mem1"])->update(['status' => "rejected"]);

        $invitation = new invitation;
        $invitation->team_name = $request["team_name"];
        $invitation->member_id = $request["mem2"];
        $invitation->status = "pending";
        $invitation->save();

        $invitation = new invitation;
        $invitation->team_name = $request["team_name"];
        $invitation->member_id = $request["mem3"];
        $invitation->status = "pending";
        $invitation->save();

         return view('ManageContest.contest_registration')->with("error","Registration Complete");

    }
}