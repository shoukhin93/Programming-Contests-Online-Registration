<?php

namespace App\Http\Controllers;
use App\team;
use App\team_result;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function getResults()
    {
        $results = team_result::all();
        return view('Lists.contest_result')->with('results', $results);
    }

    public function getTeams()
    {
        $teams = team::all();
        return view('Lists.registered_team')->with('teams', $teams);
    }
}
