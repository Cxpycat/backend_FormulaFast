<?php

namespace App\Http\Controllers\Main\Admin\Pilot;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pilot\StoreRequest;
use App\Models\Pilot;

class StorePilot extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Pilot::firstOrCreate($data);

        return redirect()->route('pilot.index');
    }
}
