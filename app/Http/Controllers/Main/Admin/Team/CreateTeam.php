<?php

namespace App\Http\Controllers\Main\Admin\Team;

use App\Http\Controllers\Controller;

class CreateTeam extends Controller
{
    public function __invoke()
    {
        return view('admin.team.create');
    }
}
