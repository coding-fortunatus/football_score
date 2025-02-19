<?php

namespace App\Action\Officials;

use App\Models\Official;

class CreateOfficial
{
    public function execute($request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('officials');
            // dd($path);
        }
        $request->merge(['photo' => $path]);
        $official = Official::create($request->validated());
        return $official ? true : false;
    }
}
