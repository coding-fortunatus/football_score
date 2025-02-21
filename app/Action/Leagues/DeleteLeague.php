<?php

namespace App\Action\Leagues;

use App\Models\League;

class DeleteLeague
{
    public function execute(string $id)
    {
        $league = League::where('league_uuid', $id);
        return $league ? $league->delete() : false;
    }
}
