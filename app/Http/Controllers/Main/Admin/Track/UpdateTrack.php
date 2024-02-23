<?php

namespace App\Http\Controllers\Main\Admin\Track;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Track\UpdateRequest;
use App\Models\Country;
use App\Models\Track;

class UpdateTrack extends Controller
{
    public function __invoke(UpdateRequest $request, Track $track)
    {
        $data = $request->validated();
        $track->update($data);
        $countries = Country::all();

        return view('admin.track.edit', compact('track', 'countries'));
    }
}
