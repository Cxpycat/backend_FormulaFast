<?php

namespace App\Http\Controllers\Main\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\UpdateRequest;
use App\Models\Team;

class UpdateTeam extends Controller
{
    public function __invoke(UpdateRequest $request, Team $team)
    {
        $data = $request->validated();
        $team->update($data);

        return view('admin.team.edit', compact('team'));
    }
}
