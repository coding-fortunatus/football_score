<?php

namespace App\Action\Matches;

use App\Models\FootballMatch;

class CreateMatch
{
    public function execute($request)
    {
        $match = FootballMatch::create($request->validated());
        return $match ? true : false;
    }
}
