<?php

namespace App\Http\Controllers\Main\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;

class DeleteTeam extends Controller
{
    public function __invoke(Team $team)
    {
        $team->delete();

        return redirect()->route('team.index');
    }
}
