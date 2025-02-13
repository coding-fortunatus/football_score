<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Official;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $players = Player::count();
        $teams   = Team::count();
        $leagues = League::count();
        $officials = Official::count();

        $scheduled_leagues = League::all()->where('status', 'Scheduled');
        $refrees           = Official::all()->where('role', 'Refree');
        return view(
            'admin.index',
            [
                'players' => $players,
                'teams' => $teams,
                'leagues' => $leagues,
                'officials' => $officials,
                'scheduled_leagues' => $scheduled_leagues,
                'refrees' => $refrees
            ]
        );
    }
}
