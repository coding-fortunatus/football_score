<?php

namespace App\Action\Officials;

use App\Models\Official;

class ShowOfficialById
{
    public function execute($id)
    {
        $official = Official::find($id);
        if (!empty($official)) {
            return $official;
        }
        return false;
    }
}
