<?php

namespace App\Action\Teams;

use App\Models\Team;

class FetchAllTeams
{
    public function execute()
    {
        $teams = Team::all();
        return $teams->isNotEmpty() ? $teams : false;
    }
}
