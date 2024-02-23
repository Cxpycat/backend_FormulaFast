<?php

namespace App\Http\Controllers\Main\Admin\Track;

use App\Http\Controllers\Controller;
use App\Models\Country;

class CreateTrack extends Controller
{
    public function __invoke()
    {
        $countries = Country::all();

        return view('admin.track.create', compact('countries'));
    }
}
