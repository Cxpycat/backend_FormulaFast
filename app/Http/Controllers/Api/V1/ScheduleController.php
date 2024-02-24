<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Schedule\ScheduleResource;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        //TODO get параметры не приходят почему то
        $year = $request->input('year') ?? 2023;

        $data = Schedule::all()
            ->whereBetween('event_time', [$year . '-01-01', ($year + 1) . '-01-01'])
            ->groupBy('grand_prix_id');

        $collection = ScheduleResource::collection($data);

        return response($collection);
    }
}
