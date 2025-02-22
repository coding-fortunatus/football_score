<?php

namespace App\Action\Leagues;

use App\Models\League;

class UpdateLeague
{
    public function execute($request, string $id)
    {
        $league = League::where('league_uuid', $id);
        return $league ? $league->update($request->validated()) : false;
    }
}
