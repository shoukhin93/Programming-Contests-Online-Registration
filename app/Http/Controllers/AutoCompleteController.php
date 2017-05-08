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
        $input = Input::get('query'); 
        $res = User::where('student_id','LIKE',$input.'%')->take(5)->get();
        $fnal = '<ul class = "list-unstyled">';
        foreach($res as $result)
        {
            $fnal.='<li>'.$result["student_id"].'</li>';
        }
        $fnal.='</ul>';
        echo $fnal;
    }
}
