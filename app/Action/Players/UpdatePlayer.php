<?php

namespace App\Action\Players;

use App\Models\Player;

class UpdatePlayer
{
    public function execute(string $id, $request)
    {
        $player = Player::where('player_uuid', $id)->first();
        return $player ? $player->update($request->validated()) : false;
    }
}
