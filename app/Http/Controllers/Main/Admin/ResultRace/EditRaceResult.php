<?php

namespace App\Http\Controllers\Main\Admin\ResultRace;

use App\Http\Controllers\Controller;
use App\Models\Pilot;
use App\Models\ResultRace;

class EditRaceResult extends Controller
{
    public function __invoke($race_id)
    {
        $resultRace = ResultRace::find($race_id);
        $pilots = Pilot::all();

        return view('admin.resultRace.edit', compact('race_id', 'pilots', 'resultRace'));
    }
}
