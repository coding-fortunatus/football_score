<?php

namespace App\Action\Coaches;

use App\Models\Coach;

class FetchAllCoache
{
    public function execute()
    {
        $coaches = Coach::with('team')->join('teams', 'coaches.team_id', '=', 'teams.id')
            ->orderBy('teams.name', 'asc')
            ->select('coaches.*')
            ->get();

        return $coaches->isNotEmpty() ? $coaches : false;
    }
}
