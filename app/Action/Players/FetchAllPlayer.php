<?php

namespace App\Action\Players;

use App\Models\Player;

class FetchAllPlayer
{
    public function execute()
    {
        $players = Player::with('team')->get();
        return $players->isNotEmpty() ? $players : false;
    }
}
