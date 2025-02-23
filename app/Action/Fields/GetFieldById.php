<?php

namespace App\Action\Fields;

use App\Models\Field;

class GetFieldById
{
    public function execute(string $id)
    {
        $field = Field::where('field_uuid', $id)->first();
        return !empty($field) ? $field : false;
    }
}
