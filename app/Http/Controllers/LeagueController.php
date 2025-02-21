<?php

namespace App\Http\Controllers;

use App\Action\Leagues\CreateLeague;
use App\Action\Leagues\DeleteLeague;
use App\Action\Leagues\FetchAllLeagues;
use App\Action\Leagues\UpdateLeague;
use App\Http\Requests\CreateLeagueRequest;
use App\Http\Requests\UpdateLeagueRequest;
use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    public function index(FetchAllLeagues $action)
    {
        $leagues = $action->execute();
        $message = $leagues ? false : true;
        return view('admin.leagues.index', compact('leagues', 'message'));
    }
    // public function show($id) {}
    public function create()
    {
        return view('admin.leagues.create');
    }
    public function store(CreateLeagueRequest $request, CreateLeague $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('leagues.index')->with('success', 'League created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create league!');
    }
    public function edit($id)
    {
        $league = League::where('league_uuid', $id)->first();
        return view('admin.leagues.edit', compact('league'));
    }
    public function update($id, UpdateLeagueRequest $request, UpdateLeague $action)
    {
        if ($action->execute($request, $id)) {
            return redirect()->route('leagues.index')->with('success', 'League updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update league!');
    }
    public function destroy($id, DeleteLeague $action)
    {
        if (!$action->execute($id)) {
            return redirect()->back()->with('error', 'Failed to delete league!');
        }
        return redirect()->route('leagues.index')->with('success', 'league deleted successfully!');
    }
}
