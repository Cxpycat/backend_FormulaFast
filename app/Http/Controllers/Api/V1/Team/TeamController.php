<?php

namespace App\Http\Controllers\Api\V1\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\Team\TeamResource;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::all();

        $collection = collect(TeamResource::collection($data));
//
//        $sorted = $collection->sortByDesc(function ($product) {
//            return $product['pts'];
//        });
//
//        $sorted = $sorted->values()->all();

        return response($collection);
    }

    public function create()
    {
        //
    }

    public function store(StoreTeamRequest $request)
    {
        //
    }

    public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        //
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    public function destroy(Team $team)
    {
        //
    }
}
