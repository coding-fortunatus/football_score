<?php

namespace App\Actions\Matches;

use App\Models\FootballMatch;

class CreateMatch
{
    public function execute($request)
    {
        $match = FootballMatch::create($request->validated());
        return $match ? true : false;
    }
}
