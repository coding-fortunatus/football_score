<?php

namespace App\Action\GoalScorers;

use App\Models\GoalScorer;

class DeleteGoalScorer
{
    public function execute($id)
    {
        $scorer = GoalScorer::where('id', $id);
        return $scorer ? $scorer->delete() : false;
    }
}
