<?php

namespace App\Action\Teams;

use App\Models\Team;

class ShowTeamById
{
    public function execute($id)
    {
        $team = Team::where('team_uuid', $id)->first();
        return !empty($team) ? $team : false;
    }
}
