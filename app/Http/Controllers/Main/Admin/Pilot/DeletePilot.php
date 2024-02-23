<?php

namespace App\Http\Controllers\Main\Admin\Pilot;

use App\Http\Controllers\Controller;
use App\Models\Pilot;

class DeletePilot extends Controller
{
    public function __invoke(Pilot $pilot)
    {
        $pilot->delete();

        return redirect()->route('pilot.index');
    }
}
