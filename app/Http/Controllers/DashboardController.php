<?php

namespace App\Http\Controllers;

use App\Action\Coaches\FetchAllCoache;
use App\Models\Coach;
use App\Models\League;
use App\Models\Official;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(FetchAllCoache $action)
    {
        $players = Player::count();
        $teams   = Team::count();
        $leagues = League::count();
        $officials = Official::count();

        $scheduled_leagues = League::all()->where('status', 'Scheduled');
        $refrees           = Official::all()->where('role', 'Referee');
        $coaches           = $action->execute();
        $message           = $coaches ? false : true;
        return view(
            'admin.index',
            [
                'players' => $players,
                'teams' => $teams,
                'leagues' => $leagues,
                'officials' => $officials,
                'scheduled_leagues' => $scheduled_leagues,
                'refrees' => $refrees,
                'coaches' => $coaches,
                'message' => $message,
            ]
        );
    }
}
