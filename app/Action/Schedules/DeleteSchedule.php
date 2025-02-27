<?php

namespace App\Action\Schedules;

use App\Models\Schedule;

class DeleteSchedule
{
    public function execute(string $id)
    {
        $schedule = Schedule::where('schedule_uuid', $id);
        return $schedule ? $schedule->delete() : false;
    }
}
