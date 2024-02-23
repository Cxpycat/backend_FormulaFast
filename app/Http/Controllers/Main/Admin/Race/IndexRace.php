<?php

namespace App\Http\Controllers\Main\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Race;

class IndexRace extends Controller
{
    public function __invoke()
    {
        $races = Race::all();

        return view('admin.race.index', compact('races'));
    }
}
