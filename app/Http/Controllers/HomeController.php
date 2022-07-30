<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roster;
use App\Models\Team;
use App\Models\Statistic;
class HomeController extends Controller
{
    public function index()
    {
        $rostersCount = Roster::count();
        $teamsCount = Team::count();

        $fieldGoaler = Roster::with(['getStatistic','getTeam'])
        ->join('player_totals', 'player_totals.player_id', '=', 'roster.id')
        ->orderBy('player_totals.field_goals','desc')->limit(5)->get();

        $threePoint = Roster::with(['getStatistic','getTeam'])
        ->join('player_totals', 'player_totals.player_id', '=', 'roster.id')
        ->orderBy('player_totals.t3pt','desc')->limit(5)->get();
        return view('home',
        [

            'rostersCount' => $rostersCount,
            'teamsCount' => $teamsCount,
            'fieldGoaler' => $fieldGoaler,
            'threePoint' => $threePoint,
        ]
        );
    }

}
