<?php

namespace App\Http\Controllers;

use App\Action\Players\CreatePlayer;
use App\Action\Players\DeletePlayer;
use App\Action\Players\FetchAllPlayer;
use App\Action\Players\ShowPlayerById;
use App\Action\Players\UpdatePlayer;
use App\Action\Teams\FetchAllTeams;
use App\Http\Requests\CreatePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(FetchAllPlayer $action)
    {
        $players = $action->execute();
        $message = $players ? false : true;
        return view('admin.players.index', compact('players', 'message'));
    }

    public function show($id) {}

    public function create(FetchAllTeams $teams)
    {
        $teams = $teams->execute();
        return view('admin.players.create', compact('teams'));
    }
    public function store(CreatePlayerRequest $request, CreatePlayer $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('players.index')->with('success', 'Player created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create player!');
    }

    public function edit($id, FetchAllTeams $teams, ShowPlayerById $action)
    {
        $teams = $teams->execute();
        $player = $action->execute($id);
        return view('admin.players.edit', compact('teams', 'player'));
    }
    public function update($id, UpdatePlayerRequest $request, UpdatePlayer $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('players.index')->with('success', 'Player updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update player!');
    }

    public function destroy($id, DeletePlayer $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('players.index')->with('success', 'Player delete successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete player!');
    }
}
