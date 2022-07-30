<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\RosterStatsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', []);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/teams', [TeamController::class, 'index'])->name('teams');
Route::get('/rosters', [RosterController::class, 'index'])->name('rosters');
Route::post('/single-roster', [RosterController::class, 'ajaxShow'])->name('rosters.single');
Route::get('/teams/filter', [TeamController::class, 'search'])->name('teams.search');
Route::get('/rosters/filter', [RosterController::class, 'search'])->name('rosters.search');
Route::get('/rosters/compare', [RosterController::class, 'compare'])->name('rosters.compare');
Route::post('/rosters/export', [RosterController::class, 'export'])->name('rosters.exports');
Route::get('/rosters/{roster}', [RosterController::class, 'show'])->name('rosters.show');
Route::get('/stats', [RosterStatsController::class, 'index'])->name('stats');

Route::get('/', function () {
    return view('teams.index');
});
