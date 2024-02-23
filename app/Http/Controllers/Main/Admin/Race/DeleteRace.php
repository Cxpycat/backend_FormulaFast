<?php

namespace App\Http\Controllers\Main\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;

class DeleteRace extends Controller
{
    public function __invoke(Race $race)
    {
        $race->delete();

        return redirect()->route('race.index');
    }
}
