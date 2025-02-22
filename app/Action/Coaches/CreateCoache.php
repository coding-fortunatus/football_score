<?php

namespace App\Action\Coaches;

use App\Models\Coach;

class CreateCoache
{
    public function execute($request)
    {
        $coach = Coach::create($request->validated());
        return $coach ? true : false;
    }
}
