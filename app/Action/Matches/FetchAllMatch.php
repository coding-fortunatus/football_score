<?php

namespace App\Actions\Matches;

use App\Models\FootballMatch;

class FetchAllMatch
{
    public function execute()
    {
        $match = FootballMatch::with('schedule', 'winner', 'goalScorers')->get();
        return $match->isNotEmpty() ? $match : false;
    }
}
