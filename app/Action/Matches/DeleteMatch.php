<?php

namespace App\Actions\Matches;

use App\Models\FootballMatch;

class DeleteMatch
{
    public function execute(string $id)
    {
        $match = FootballMatch::where('match_uuid', $id);
        return $match ? $match->delete() : false;
    }
}
