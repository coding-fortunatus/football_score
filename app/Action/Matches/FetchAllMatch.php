<?php

namespace App\Action\Matches;

use App\Models\FootballMatch;

class FetchAllMatch
{
    public function execute()
    {
        $match = FootballMatch::with('schedule', 'winner')->orderBy('winner_team_id', 'desc')->get();
        return $match->isNotEmpty() ? $match : false;
    }
}
