<?php

namespace App\Http\Controllers\Main\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Team;

class EditTeam extends Controller
{
    public function __invoke(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }
}
