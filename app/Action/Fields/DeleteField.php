<?php

namespace App\Action\Fields;

use App\Models\Field;

class DeleteField
{
    public function execute(string $id)
    {
        $field = Field::where('field_uuid', $id)->first();
        return $field ? $field->delete() : false;
    }
}
