<?php

namespace App\Action\Leagues;

use App\Models\League;

class ShowLeagueById
{
    public function execute(string $id)
    {
        $league = League::where('league_uuid', $id)->first();
        return !empty($league) ? $league : false;
    }
}
