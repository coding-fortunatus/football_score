<?php

namespace App\Http\Controllers;

use App\Action\GoalScorers\CreateGoalScorer;
use App\Action\GoalScorers\DeleteGoalScorer;
use App\Action\GoalScorers\FetchAllGoalScorers;
use App\Action\GoalScorers\GetGoalScorerById;
use App\Action\GoalScorers\ShowGoalScorerById;
use App\Action\GoalScorers\UpdateGoalScorer;
use App\Action\Matches\FetchAllMatch;
use App\Action\Players\FetchAllPlayer;
use App\Http\Requests\CreateGoalScorerRequest;
use App\Http\Requests\UpdateGoalScorerRequest;
use Illuminate\Http\Request;

class GoalScorerController extends Controller
{
    public function index(FetchAllGoalScorers $action)
    {
        $scorers = $action->execute();
        $message = $scorers ? false : true;
        return view('admin.scorers.index', compact('scorers', 'message'));
    }

    public function create(FetchAllMatch $match, FetchAllPlayer $player)
    {
        $players = $player->execute();
        $matches  = $match->execute();
        return view('admin.scorers.create', compact(['players', 'matches']));
    }

    public function store(CreateGoalScorer $action, CreateGoalScorerRequest $request)
    {
        if ($action->execute($request)) {
            return redirect()->route('scorers.index')->with('success', 'Goal Scorer added successfully!');
        }
        return redirect()->back()->with('error', 'Failed to add Goal Scorer!');
    }

    public function edit($id, ShowGoalScorerById $action)
    {
        $scorer = $action->execute($id);
        return view('admin.scorers.edit', compact('scorer'));
    }

    public function update($id, UpdateGoalScorerRequest $request, UpdateGoalScorer $action)
    {
        if ($action->execute($id, $request)) {
            return redirect()->route('scorers.index')->with('success', 'Goal Scorer updated successfully!');
        }
        return redirect()->back()->with('error', 'Failed to update Goal Scorer!');
    }

    public function destroy($id, DeleteGoalScorer $action)
    {
        if ($action->execute($id)) {
            return redirect()->route('scorers.index')->with('success', 'Goal Scorer deleted successfully!');
        }
        return redirect()->back()->with('error', 'Failed to delete Goal Scorer!');
    }
}
