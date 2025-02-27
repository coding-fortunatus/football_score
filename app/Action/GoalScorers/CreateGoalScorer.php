<?php

namespace App\Action\GoalScorers;

use App\Models\GoalScorer;

class CreateGoalScorer
{
    public function execute($request)
    {
        $scorer = GoalScorer::create($request->validated());
        return $scorer ? true : false;
    }
}
