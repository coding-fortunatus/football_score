<?php

namespace App\Action\Players;

use App\Models\Player;

class ShowPlayerById
{
    public function execute(string $id)
    {
        $player = Player::where('player_uuid', $id)->first();
        return !empty($player) ? $player : false;
    }
}
