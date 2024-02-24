<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Team\TeamWithPtsResource;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        $collection = collect(TeamWithPtsResource::collection($teams));

        $sorted = $collection->sortByDesc(function ($team) {
            return $team['all_pts'];
        });

        $sorted = $sorted->values()->all();

        return response($sorted);
    }
}
