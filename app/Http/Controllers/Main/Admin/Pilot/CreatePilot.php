<?php

namespace App\Http\Controllers\Main\Admin\Pilot;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Team;

class CreatePilot extends Controller
{
    public function __invoke()
    {
        $countries = Country::all();
        $teams = Team::all();

        return view('admin.pilot.create', compact('countries', 'teams'));
    }
}
