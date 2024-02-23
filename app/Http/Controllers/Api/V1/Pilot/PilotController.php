<?php

namespace App\Http\Controllers\Api\V1\Pilot;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePilotRequest;
use App\Http\Requests\UpdatePilotRequest;
use App\Http\Resources\Schedule\ScheduleResource;
use App\Models\Pilot;

class PilotController extends Controller
{
    public function index()
    {
        $data = Pilot::all();

        $collection = collect(ScheduleResource::collection($data));

        return response($collection);
    }

    public function create()
    {

    }

    public function store(StorePilotRequest $request)
    {

    }

    public function show(Pilot $pilot)
    {

    }

    public function edit(Pilot $pilot)
    {

    }

    public function update(UpdatePilotRequest $request, Pilot $pilot)
    {

    }

    public function destroy(Pilot $pilot)
    {

    }
}
