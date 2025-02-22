<?php

namespace App\Action\Coaches;

use App\Models\Coach;

class UpdateCoache
{
    public function execute(string $id, $request)
    {
        $coach = Coach::where('coach_uuid', $id);
        return $coach ? $coach->update($request->validated()) : false;
    }
}
