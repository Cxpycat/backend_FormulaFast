<?php

namespace App\Http\Controllers\Main\Admin\Track;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Track\StoreRequest;
use App\Models\Track;

class StoreTrack extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Track::firstOrCreate($data);

        return redirect()->route('track.index');
    }
}
