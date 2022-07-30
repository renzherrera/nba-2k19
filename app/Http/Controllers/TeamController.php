<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //

    public function index()
    {
        $teams = Team::paginate(6);
        return view('teams.index',
        [

            'teams' => $teams
        ]
        );
    }

    public function search(Request $request){
        $search = $request->input('search');
       if ( !empty($search) ) {
        

        $teams = Team::where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('code', 'LIKE', '%' . $search . '%')
                        ->paginate(5);
       }else{
          $teams = Team::paginate(5);
       }
       return view('teams.index', compact('teams'));
       
    }
}
