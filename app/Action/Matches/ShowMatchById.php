<?php

namespace App\Actions\Matches;

use App\Models\FootballMatch;

class ShowMatchById
{
    public function execute(string $id)
    {
        $match = FootballMatch::with('schedule', 'winner', 'goalScorers')->where('match_uuid', $id)->first();
        return !empty($match) ? $match : false;
    }
}
