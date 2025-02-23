<?php

namespace App\Action\Teams;

use App\Models\Team;

class FetchAllTeams
{
    public function execute()
    {
        $teams = Team::orderBy('faculty', 'asc')->get();
        return $teams->isNotEmpty() ? $teams : false;
    }
}
