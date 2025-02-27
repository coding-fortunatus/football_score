<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FootballMatch extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->match_uuid = Str::uuid();
        });
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_team_id');
    }

    public function goalScorers()
    {
        return $this->hasMany(GoalScorer::class);
    }
}
