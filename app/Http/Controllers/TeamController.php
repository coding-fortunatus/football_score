<?php

namespace App\Http\Controllers;

use App\Action\Teams\CreateTeam;
use App\Action\Teams\DeleteTeam;
use App\Action\Teams\FetchAllTeams;
use App\Action\Teams\ShowTeamById;
use App\Action\Teams\UpdateTeam;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(FetchAllTeams $action)
    {
        $teams = $action->execute();
        $message = $teams ? false : true;
        return view('admin.teams.index', compact('teams', 'message'));
    }
    public function show($id) {}

    public function create()
    {
        return view('admin.teams.create');
    }
    public function store(CreateTeamRequest $request, CreateTeam $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('teams.index')->with('success', 'Team created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create team!');
    }

    public function edit($id, ShowTeamById $action)
    {
        $team = $action->execute($id);
        return view('admin.teams.edit', compact('team'));
    }
    public function update($id, UpdateTeamRequest $request, UpdateTeam $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('teams.index')->with('success', 'Team updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update team!');
    }

    public function destroy($id, DeleteTeam $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('teams.index')->with('success', 'Team delete successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete team!');
    }
}
