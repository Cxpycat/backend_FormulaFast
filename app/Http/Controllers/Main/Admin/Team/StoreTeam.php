<?php

namespace App\Http\Controllers\Main\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\StoreRequest;
use App\Models\Team;

class StoreTeam extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Team::firstOrCreate($data);

        return redirect()->route('team.index');
    }
}
