<?php

namespace App\Action\Officials;

use App\Models\Official;

class UpdateOfficial
{
    public function execute($id, $request)
    {
        $official = Official::where('id', $id);
        if ($official) {
            return $official->update($request->all());
        }
        return false;
    }
}
