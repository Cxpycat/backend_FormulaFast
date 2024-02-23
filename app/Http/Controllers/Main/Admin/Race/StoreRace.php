<?php

namespace App\Http\Controllers\Main\Admin\Race;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Race\StoreRequest;
use App\Models\Race;

class StoreRace extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Race::create($data);

        return redirect()->route('race.index');
    }
}
