<?php

namespace App\Action\Officials;

use App\Models\Official;

class CreateOfficial
{
    public function execute($request)
    {
        $official = Official::create($request->all());
        if ($official) {
            return true;
        }
        return false;
    }
}
