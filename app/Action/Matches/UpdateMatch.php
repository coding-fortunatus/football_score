<?php

namespace App\Actions\Matches;

use App\Models\FootballMatch;

class UpdateMatch
{
    public function execute(string $id, $request)
    {
        $match = FootballMatch::where('match_uuid', $id);
        return $match ? $match->update($request->validated()) : false;
    }
}
