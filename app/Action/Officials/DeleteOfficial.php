<?php

namespace App\Action\Officials;

use App\Models\Official;

class DeleteOfficial
{
    public function execute($id)
    {
        $official = Official::where('official_uuid', $id);
        if (!empty($official)) {
            return $official->delete();
        }
        return false;
    }
}
