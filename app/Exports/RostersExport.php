<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Roster;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class RostersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $rosters;
    public function __construct($rosters){
        $this->rosters = $rosters;
    }
    public function view(): View
    {
        return view('rosters.exports', ['rosters' => $this->rosters]);
       
    }
}
