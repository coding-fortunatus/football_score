<?php

namespace App\Action\Players;

use App\Models\Player;

class CreatePlayer
{
    public function execute($request)
    {
        $player = Player::create($request->validated());
        return $player ? true : false;
    }
}
