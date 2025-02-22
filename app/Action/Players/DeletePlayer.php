<?php

namespace App\Action\Players;

use App\Models\Player;

class DeletePlayer
{
    public function execute($id)
    {
        $player = Player::where('player_uuid', $id)->first();
        return $player ? $player->delete() : false;
    }
}
