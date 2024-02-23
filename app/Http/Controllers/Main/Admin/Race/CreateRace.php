<?php

namespace App\Http\Controllers\Main\Admin\Race;

use App\Http\Controllers\Controller;
use App\Models\Track;

class CreateRace extends Controller
{
    public function __invoke()
    {
        $tracks = Track::all();

        return view('admin.race.create', compact('tracks'));
    }
}
