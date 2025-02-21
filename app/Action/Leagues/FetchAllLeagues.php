<?php

namespace App\Action\Leagues;

use App\Models\League;

class FetchAllLeagues
{
    public function execute()
    {
        $leagues = League::all();
        return $leagues->isNotEmpty() ? $leagues : false;
    }
}
