<?php

namespace App\Action\Officials;

use App\Models\Official;

class ShowOfficialById
{
    public function execute($id)
    {
        $official = Official::where('official_uuid', $id)->first();
        if (!empty($official)) {
            return $official;
        }
        return false;
    }
}
