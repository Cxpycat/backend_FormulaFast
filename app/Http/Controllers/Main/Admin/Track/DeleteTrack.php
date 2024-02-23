<?php

namespace App\Http\Controllers\Main\Admin\Track;

use App\Http\Controllers\Controller;
use App\Models\Track;

class DeleteTrack extends Controller
{
    public function __invoke(Track $track)
    {
        $track->delete();

        return redirect()->route('track.index');
    }
}
