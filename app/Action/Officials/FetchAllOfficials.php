<?php

namespace App\Action\Officials;

use App\Models\Official;

class FetchAllOfficials
{
    public function execute()
    {
        $officials = Official::orderBy('role', 'desc')->get();
        if ($officials->isNotEmpty()) {
            return $officials;
        }
        return false;
    }
}
