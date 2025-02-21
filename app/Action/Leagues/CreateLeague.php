<?php

namespace App\Action\Leagues;

use App\Models\League;
use Illuminate\Support\Str;

class CreateLeague
{
    public function execute($request)
    {
        // $request['slug'] = Str::slug($request['title']);
        $league = League::create($request->validated());
        return $league ? true : false;
    }
}
