<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RosterStatsController extends Controller
{
    public function index()
    {
        return view('stats.index');
    }
}
