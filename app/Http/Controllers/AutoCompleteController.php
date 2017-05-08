<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\running_contest;
use App\User;

class AutoCompleteController extends Controller
{
    public function profile()
    {
        $input = Input::get('term'); 
        $res = User::where('student_id','LIKE',$input.'%')->take(5)->get();
        $fnal = [];
        foreach($res as $result)
        {
             array_push($fnal,$result["student_id"]);
        }
        return response()->json($fnal);
    }
}
