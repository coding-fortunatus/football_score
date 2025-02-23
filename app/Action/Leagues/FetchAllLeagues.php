<?php

namespace App\Action\Leagues;

use App\Models\League;

class FetchAllLeagues
{
    public function execute()
    {
        $leagues = League::orderBy('status', 'asc')->get();
        return $leagues->isNotEmpty() ? $leagues : false;
    }
}
