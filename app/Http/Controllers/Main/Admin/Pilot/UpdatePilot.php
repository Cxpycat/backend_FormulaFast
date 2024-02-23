<?php

namespace App\Http\Controllers\Main\Admin\Pilot;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pilot\UpdateRequest;
use App\Models\Country;
use App\Models\Pilot;
use App\Models\Team;

class UpdatePilot extends Controller
{
    public function __invoke(UpdateRequest $request, Pilot $pilot)
    {
        $data = $request->validated();
        $pilot->update($data);

        $countries = Country::all();
        $teams = Team::all();

        return view('admin.pilot.edit', compact('pilot', 'countries', 'teams'));
    }
}
