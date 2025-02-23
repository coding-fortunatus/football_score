<?php

namespace App\Action\Fields;

use App\Models\Field;

class UpdateField
{

    public function execute(string $id, $request)
    {
        $field = Field::where('field_uuid', $id);
        return $field ? $field->update($request->validated()) : false;
    }
}
