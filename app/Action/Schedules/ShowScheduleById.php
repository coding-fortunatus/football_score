<?php

namespace App\Action\Schedules;

use App\Models\Schedule;

class ShowScheduleById
{
    public function execute(string $id)
    {
        $schedule = Schedule::with('team1', 'team2', 'field', 'official', 'league')->where('schedule_uuid', $id)->first();
        return !empty($schedule) ? $schedule : false;
    }
}
