<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roster;
use App\Exports\RostersExport;
use App\Models\Team;
use Maatwebsite\Excel\Facades\Excel;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Redirect,Response;
class RosterController extends Controller
{
    public $rosters,$team,$position;
    public function __construct(){

        $this->team = Team::all();
        $this->position = Roster::select('pos')
                     ->groupBy('pos')
                     ->get();
    }
    public function index()
    {
        $rosters = Roster::select('*')->with(['getTeam'])->paginate(8);
        $team = $this->team;
        $position = $this->position;

        return view('rosters.index',
        [

            'rosters' => $rosters,
            'team' => $team,
            'position' => $position,
        ]
        );
    }

    public function show(Roster $roster)
    {
        return view('rosters.statistics',
        [

            'roster' => $roster
        ]
        );
    }

    public function export(Request $request)
    {
        $search = $request->input('player');
        $teamSelect = $request->input('teamSelect');
        $positionSelect = $request->input('positionSelect');

        $team = $this->team;
        $position = $this->position;

        

        $rosters = Roster::with(['getTeam']);
       if ( !empty($search) ) {
       $rosters->where('name', 'LIKE', '%' . $search . '%');
       }
       if ( !empty($positionSelect) ) {
        $rosters->where('pos', $positionSelect);
       }
       if ( !empty($teamSelect) ) {
        $rosters->where('team_code', $teamSelect);
       }

                        

        $rosters = $rosters->get();

       return Excel::download(new RostersExport(json_decode($rosters)), 'filter.xlsx');

    }

    public function search(Request $request){

        $search = $request->input('player');
        $teamSelect = $request->input('team');
        $positionSelect = $request->input('position');

        $team = $this->team;
        $position = $this->position;

        

        $rosters = Roster::with(['getTeam']);
       if ( !empty($search) ) {
       $rosters->where('name', 'LIKE', '%' . $search . '%');
       }
       if ( !empty($positionSelect) ) {
        $rosters->where('pos', $positionSelect);
       }
       if ( !empty($teamSelect) ) {
        $rosters->where('team_code', $teamSelect);
       }

                        

        $rosters = $rosters->paginate(8);

          $this->rosters = $rosters;

       return view('rosters.index',
    
            [
                'rosters' => $rosters,
                'team' => $team,
                'position' => $position,
            ]
        );
    }

    public function compare(){
        $rosters = Roster::select('*')->with(['getTeam'])->get();

        return view('rosters.compare',
        [
            'rosters' => $rosters,
        ]
        );

    }

    public function ajaxShow(Request $request){
        $player_id = $request->player_id;
 
        $rosters = Roster::with(['getTeam','getStatistic'])
                            ->where('id',$player_id)
                            ->first();

         return response()->json($rosters);


    }

}
