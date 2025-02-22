<?php

namespace App\Action\Coaches;

use App\Models\Coach;

class FetchAllCoache
{
    public function execute()
    {
        $coaches = Coach::with('team')->get();
        return $coaches->isNotEmpty() ? $coaches : false;
    }
}
