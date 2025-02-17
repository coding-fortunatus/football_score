<?php

namespace App\Action\Officials;

use App\Models\Official;

class FetchAllOfficials
{
    public function execute()
    {
        $officials = Official::all();
        if ($officials->isNotEmpty()) {
            return $officials;
        }
        return false;
    }
}
