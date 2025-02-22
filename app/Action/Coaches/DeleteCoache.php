<?php

namespace App\Action\Coaches;

use App\Models\Coach;

class DeleteCoache
{
    public function execute(string $id)
    {
        $coach = Coach::where('coach_uuid', $id);
        return $coach ? $coach->delete() : false;
    }
}
