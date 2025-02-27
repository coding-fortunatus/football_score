<?php

namespace App\Action\GoalScorers;

use App\Models\GoalScorer;

class FetchAllGoalScorers
{
    public function execute()
    {
        $scorer = GoalScorer::with('match', 'player')->get();
        return $scorer->isNotEmpty() ? $scorer : false;
    }
}
