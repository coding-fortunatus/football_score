<?php

namespace App\Action\GoalScorers;

use App\Models\GoalScorer;

class ShowGoalScorerById
{
    public function execute($id)
    {
        $scorer = GoalScorer::with('match', 'player')->where('id', $id);
        return !empty($scorer) ? $scorer : false;
    }
}
