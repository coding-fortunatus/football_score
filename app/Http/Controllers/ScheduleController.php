<?php

namespace App\Http\Controllers;

use App\Action\Fields\FetchAllField;
use App\Action\Leagues\FetchAllLeagues;
use App\Action\Officials\FetchAllOfficials;
use App\Action\Schedules\CreateSchedule;
use App\Action\Schedules\DeleteSchedule;
use App\Action\Schedules\FetchAllSchedule;
use App\Action\Schedules\ShowScheduleById;
use App\Action\Schedules\UpdateSchedule;
use App\Action\Teams\FetchAllTeams;
use App\Http\Requests\CreateScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(FetchAllSchedule $action)
    {
        $schedules = $action->execute();
        $message = $schedules ? false : true;
        return view('admin.schedules.index', compact('schedules', 'message'));
    }
    public function show($id) {}

    public function create(FetchAllField $field, FetchAllTeams $team, FetchAllLeagues $league, FetchAllOfficials $official)
    {
        $teams = $team->execute();
        $fields = $field->execute();
        $leagues = $league->execute();
        $officials = $official->execute();
        return view('admin.schedules.create', compact(['teams', 'fields', 'leagues', 'officials']));
    }

    public function store(CreateScheduleRequest $request, CreateSchedule $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('schedules.index')->with('success', 'Schedule created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create schedule!');
    }

    public function edit($id, ShowScheduleById $action, FetchAllField $field, FetchAllTeams $team, FetchAllLeagues $league, FetchAllOfficials $official)
    {
        $schedule = $action->execute($id);
        $teams = $team->execute();
        $fields = $field->execute();
        $leagues = $league->execute();
        $officials = $official->execute();
        return view('admin.schedules.edit', compact(['schedule', 'teams', 'fields', 'leagues', 'officials']));
    }

    public function update($id, UpdateScheduleRequest $request, UpdateSchedule $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update schedule!');
    }

    public function destroy($id, DeleteSchedule $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('schedules.index')->with('success', 'Schedule delete successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete schedule!');
    }
}
