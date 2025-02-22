<?php

namespace App\Action\Teams;

use App\Models\Team;

class CreateTeam
{
    public function execute($request)
    {
        $team = Team::create($request->validated());
        return $team ? true : false;
    }
}
