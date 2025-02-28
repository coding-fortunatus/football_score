<?php

namespace App\Action\Matches;

use App\Models\FootballMatch;

class FetchAllMatch
{
    public function execute()
    {
        $match = FootballMatch::with('schedule', 'winner')->get();
        return $match->isNotEmpty() ? $match : false;
    }
}
