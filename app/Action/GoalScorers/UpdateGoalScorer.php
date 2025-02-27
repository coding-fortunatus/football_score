<?php

namespace App\Action\GoalScorers;

use App\Models\GoalScorer;

class UpdateGoalScorer
{
    public function execute($id, $request)
    {
        $scorer = GoalScorer::where('id', $id);
        return $scorer ? $scorer->update($request->validated()) : false;
    }
}
