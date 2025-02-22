<?php

namespace App\Action\Teams;

use App\Models\Team;

class DeleteTeam
{
    public function execute($id)
    {
        $team = Team::where('team_uuid', $id);
        return $team ? $team->delete() : false;
    }
}
