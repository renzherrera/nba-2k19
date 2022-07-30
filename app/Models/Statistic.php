<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Statistic;
use App\Models\Roster;

class Statistic extends Model
{
    use HasFactory;
    protected $table = 'player_totals';

    protected $fillable = [
        'player_id',
        'age',
        'games',
        'games_started',
        'minutes_played',
        'field_goals',
        'field_goals_attempted',
        '3pt',
        '3pt_attempted',
        '2pt',
        '2pt_attempted',
        'free_throws',
        'free_throws_attempted',
        'offensive_rebounds',
        'defensive_rebounds',
        'assists',
        'steals',
        'blocks',
        'turnovers',
        'personal_fouls',

        

    ];


    public function getRosterRelation(){
        return $this->belongsTo(Roster::class, 'player_id', 'id');

    }
}
