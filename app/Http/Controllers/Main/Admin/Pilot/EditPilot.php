<?php

namespace App\Http\Controllers\Main\Admin\Pilot;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Pilot;
use App\Models\Team;

class EditPilot extends Controller
{
    public function __invoke(Pilot $pilot)
    {
        $countries = Country::all();
        $teams = Team::all();

        return view('admin.pilot.edit', compact('pilot', 'countries', 'teams'));
    }
}
