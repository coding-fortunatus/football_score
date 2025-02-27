<?php

namespace App\Action\Schedules;

use App\Models\Schedule;

class UpdateSchedule
{
    public function execute(string $id, $request)
    {
        $schedule = Schedule::where('schedule_uuid', $id);
        return $schedule ? $schedule->update($request->validated()) : false;
    }
}
