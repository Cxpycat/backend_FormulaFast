<?php

namespace App\Http\Controllers\Api\V1\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePilotRequest;
use App\Http\Requests\UpdatePilotRequest;
use App\Http\Resources\Schedule\ScheduleResource;
use App\Models\Pilot;
use App\Models\Schedule;
use Illuminate\Support\Facades\Storage;

class ScheduleController extends Controller
{
    public function index()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
        $data = Schedule::all()->groupBy('grand_prix_id');
        $collection = ScheduleResource::collection($data);

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
