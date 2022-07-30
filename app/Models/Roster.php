<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Statistic;


class Roster extends Model
{
    use HasFactory;

    protected $table = 'roster';
    protected $casts = ['id' => 'string'];
    protected $fillable = [
        'id',
        'team_code',
        'number',
        'name',
        'pos',
        'height',
        'weight',
        'dob',
        'nationality',
        'years_exp',
        'college',

    ];

    public function getStatistic(){
        return $this->hasOne(Statistic::class, 'player_id', 'id');

    }

    public function getTeam(){
        return $this->belongsTo(Team::class, 'team_code', 'code');

    }
}
