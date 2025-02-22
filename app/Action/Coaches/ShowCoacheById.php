<?php

namespace App\Action\Coaches;

use App\Models\Coach;

class ShowCoacheById
{
    public function execute(string $id)
    {
        $coach = Coach::where('coach_uuid', $id)->first();
        return !empty($coach) ? $coach : false;
    }
}
