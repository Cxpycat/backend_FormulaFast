<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePilotRequest;
use App\Http\Requests\UpdatePilotRequest;
use App\Http\Resources\Pilot\PilotResource;
use App\Http\Resources\Schedule\ScheduleResource;
use App\Models\Pilot;

class PilotController extends Controller
{
    public function index()
    {
        $pilots = Pilot::all();

        $collection = collect(PilotResource::collection($pilots));

        return response($collection);
    }
}
