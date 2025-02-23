<?php

namespace App\Action\Fields;

use App\Models\Field;

class CreateField
{
    public function execute($request)
    {
        $field = Field::create($request->validated());
        return $field ? true : false;
    }
}
