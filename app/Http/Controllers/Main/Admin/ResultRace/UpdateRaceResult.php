<?php

namespace App\Http\Controllers\Main\Admin\ResultRace;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ResultRace\StoreRequest;
use App\Models\Pilot;
use App\Models\ResultRace;

class UpdateRaceResult extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $resultRace = ResultRace::updateOrCreate(['race_id' => $data['race_id']], $data);
        $race_id = $resultRace->id;
        $pilots = Pilot::all();
        return view('admin.resultRace.edit', compact('race_id', 'pilots'));
    }
}
