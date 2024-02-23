<?php

namespace App\Http\Controllers\Main\Admin\Track;

use App\Http\Controllers\Controller;
use App\Models\Track;

class IndexTrack extends Controller
{
    public function __invoke()
    {
        $tracks = Track::all();
        return view('admin.track.index', compact('tracks'));
    }
}
