<?php

namespace App\Http\Controllers\Main\Admin\Track;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Track;

class EditTrack extends Controller
{
    public function __invoke(Track $track)
    {
        $countries = Country::all();
        return view('admin.track.edit', compact('track', 'countries'));
    }
}
