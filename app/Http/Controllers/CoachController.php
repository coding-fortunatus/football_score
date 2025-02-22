<?php

namespace App\Http\Controllers;

use App\Action\Coaches\CreateCoache;
use App\Action\Coaches\DeleteCoache;
use App\Action\Coaches\FetchAllCoache;
use App\Action\Coaches\ShowCoacheById;
use App\Action\Coaches\UpdateCoache;
use App\Action\Teams\FetchAllTeams;
use App\Http\Requests\CreateCoachRequest;
use App\Http\Requests\UpdateCoachRequest;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index(FetchAllCoache $action)
    {
        $coahes = $action->execute();
        $message = $coahes ? false : true;
        return view('admin.index', compact('coahes', 'message'));
    }
    public function show($id) {}
    public function create(FetchAllTeams $action)
    {
        $teams = $action->execute();
        return view('admin.coaches.create', compact('teams'));
    }
    public function store(CreateCoachRequest $request, CreateCoache $action)
    {
        if ($action->execute($request)) {
            return redirect()->route('Dashboard')->with('success', 'Coach created successfully!');
        }
        return redirect()->back()->with('error', 'Failed to create coach!');
    }
    public function edit($id, ShowCoacheById $action, FetchAllTeams $teams)
    {
        $teams = $teams->execute();
        $coach = $action->execute($id);
        return view('admin.coaches.edit', compact('coach', 'teams'));
    }
    public function update($id, UpdateCoachRequest $request, UpdateCoache $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('Dashboard')->with('success', 'Coach updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update coach!');
    }
    public function destroy($id, DeleteCoache $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('Dashboard')->with('success', 'Coach deleted successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete coach!');
    }
}
