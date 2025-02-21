<?php

namespace App\Action\Leagues;

use App\Models\League;

class UpdateLeague
{
    public function execute($request, $id)
    {
        $league = League::where('league_uuid', $id);
        if ($league) {
            return $league->update($request->validated());
        }
        return false;
    }
}
