<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoalScorer extends Model
{
    protected $guarded = [];

    public function match()
    {
        return $this->belongsTo(FootballMatch::class, "match_id");
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
