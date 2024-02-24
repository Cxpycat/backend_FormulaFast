<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGrandPrixRequest;
use App\Http\Requests\UpdateGrandPrixRequest;
use App\Http\Resources\GrandPrix\GrandPrixResource;
use App\Http\Resources\Pilot\PilotResource;
use App\Models\GrandPrix;
use Illuminate\Http\Request;

class GrandPrixController extends Controller
{
    public function index(Request $request)
    {
        //TODO get параметры не приходят почему то
        $year = $request->input('year') ?? 2023;

        $data = GrandPrix::all();

        $collection = collect(GrandPrixResource::collection($data));

        return response($collection);
    }
}
