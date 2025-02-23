<?php

namespace App\Http\Controllers;

use App\Action\Players\FetchAllPlayer;
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
}
