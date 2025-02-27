<?php

namespace App\Action\Schedules;

use App\Models\Schedule;

class CreateSchedule
{
    public function execute($request)
    {
        $schedule = Schedule::create($request->validated());
        return $schedule ? true : false;
    }
}
