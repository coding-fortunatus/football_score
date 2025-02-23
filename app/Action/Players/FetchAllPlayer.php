<?php

namespace App\Action\Players;

use App\Models\Player;

class FetchAllPlayer
{
    public function execute()
    {
        $players = Player::with('team')->join('teams', 'players.team_id', '=', 'teams.id')
            ->orderBy('teams.name', 'desc')
            ->select('players.*')
            ->get();;
        return $players->isNotEmpty() ? $players : false;
    }
}
