<?php

namespace App\Action\Officials;

use App\Models\Official;

class DeleteOfficial
{
    public function execute($id)
    {
        $official = Official::find($id);
        if (!empty($official)) {
            return $official->delete();
        }
        return false;
    }
}
