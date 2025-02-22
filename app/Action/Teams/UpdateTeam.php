<?php

namespace App\Action\Teams;

use App\Models\Team;

class UpdateTeam
{
    public function execute($id, $request)
    {
        $team = Team::where('team_uuid', $id);
        return $team ? $team->update($request->validated()) : false;
    }
}
