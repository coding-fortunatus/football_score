<?php

namespace App\Http\Controllers;

use App\Action\Matches\FetchAllMatch;
use App\Action\Players\FetchAllPlayer;
use App\Action\Schedules\FetchAllSchedule;
use App\Action\Teams\FetchAllTeams;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(FetchAllPlayer $player)
    {
        $players = $player->execute();
        return view('index', compact('players'));
    }

    public function teams(FetchAllTeams $team)
    {
        $teams = $team->execute();
        return view('teams', compact('teams'));
    }

    public function players(FetchAllPlayer $player)
    {
        $players = $player->execute();
        return view('players', compact('players'));
    }

    public function schedules(FetchAllSchedule $schedule)
    {
        $schedules = $schedule->execute();
        return view('schedule', compact('schedules'));
    }

    public function matches(FetchAllMatch $match)
    {
        $matches = $match->execute();
        return view('matches', compact('matches'));
    }
}
