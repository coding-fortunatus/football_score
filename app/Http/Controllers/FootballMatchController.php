<?php

namespace App\Http\Controllers;

use App\Action\Fields\FetchAllField;
use App\Action\Leagues\FetchAllLeagues;
use App\Action\Officials\FetchAllOfficials;
use App\Action\Matches\CreateMatch;
use App\Action\Matches\DeleteMatch;
use App\Action\Matches\FetchAllMatch;
use App\Action\Matches\ShowMatchById;
use App\Action\Matches\UpdateMatch;
use App\Action\Schedules\FetchAllSchedule;
use App\Action\Teams\FetchAllTeams;
use App\Http\Requests\CreateMatchRequest;
use App\Http\Requests\UpdateMatchRequest;

class FootballMatchController extends Controller
{
    public function index(FetchAllMatch $action)
    {
        $matches = $action->execute();
        $message = $matches ? false : true;
        return view('admin.matches.index', compact('matches', 'message'));
    }

    public function show($id, ShowMatchById $action)
    {
        $match = $action->execute($id);
        if (!$match) {
            return redirect()->route('matches.index')->with('error', 'Match not found!');
        }
        return view('admin.matches.show', compact('match'));
    }

    public function create(FetchAllSchedule $schedule, FetchAllTeams $action)
    {
        $teams     = $action->execute();
        $schedules = $schedule->execute();
        return view('admin.matches.create', compact(['schedules', 'teams']));
    }

    public function store(CreateMatchRequest $request, CreateMatch $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('matches.index')->with('success', 'Football match created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create football match!');
    }

    public function edit($id, ShowMatchById $action, FetchAllSchedule $schedule, FetchAllTeams $team)
    {
        $match = $action->execute($id);
        if (!$match) {
            return redirect()->route('matches.index')->with('error', 'Match not found!');
        }
        $teams = $team->execute();
        $schedules = $schedule->execute();
        return view('admin.matches.edit', compact(['match', 'teams', 'schedules']));
    }

    public function update($id, UpdateMatchRequest $request, UpdateMatch $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('matches.index')->with('success', 'Football match updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update football match!');
    }

    public function destroy($id, DeleteMatch $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('matches.index')->with('success', 'Football match deleted successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete football match!');
    }
}
