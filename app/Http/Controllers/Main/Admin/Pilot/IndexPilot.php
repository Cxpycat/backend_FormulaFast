<?php

namespace App\Http\Controllers\Main\Admin\Pilot;

use App\Http\Controllers\Controller;
use App\Models\Pilot;

class IndexPilot extends Controller
{
    public function __invoke()
    {
        $pilots = Pilot::all();
        return view('admin.pilot.index', compact('pilots'));
    }
}
