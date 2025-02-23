<?php

namespace App\Action\Fields;

use App\Models\Field;

class FetchAllField
{
    public function execute()
    {
        // $fields = Field::with('schedule')->get();
        $fields = Field::all();
        return $fields->isNotEmpty() ? $fields : false;
    }
}
