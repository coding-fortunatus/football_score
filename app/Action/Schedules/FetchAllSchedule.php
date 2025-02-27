<?php

namespace App\Action\Schedules;

use App\Models\Schedule;

class FetchAllSchedule
{
    public function execute()
    {
        $schedules = Schedule::with('team1', 'team2', 'field', 'official', 'league')->get();
        return $schedules->isNotEmpty() ? $schedules : false;
    }
}
