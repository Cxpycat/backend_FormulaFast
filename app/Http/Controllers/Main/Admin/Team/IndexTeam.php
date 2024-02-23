<?php

namespace App\Http\Controllers\Main\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;

class IndexTeam extends Controller
{
    public function __invoke()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }
}
