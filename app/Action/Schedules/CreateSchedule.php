<?php

namespace App\Action\Schedules;

use App\Models\Schedule;

class CreateSchedule
{
    public function execute($request)
    {
        if ($request->team_1_id === $request->team_2_id) {
            return false;
        }
        $schedule = Schedule::create($request->validated());
        return $schedule ? true : false;
    }
}
