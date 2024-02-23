<?php

namespace App\Http\Controllers\Api\V1\RaceResult;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRaceResultRequest;
use App\Http\Requests\UpdateRaceResultRequest;
use App\Http\Resources\Race\RaceResource;
use App\Models\RaceResult;

class RaceResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RaceResult::all();
        return response(RaceResource::collection($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreRaceResultRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRaceResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\RaceResult $raceResult
     * @return \Illuminate\Http\Response
     */
    public function show(RaceResult $raceResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\RaceResult $raceResult
     * @return \Illuminate\Http\Response
     */
    public function edit(RaceResult $raceResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateRaceResultRequest $request
     * @param \App\Models\RaceResult $raceResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRaceResultRequest $request, RaceResult $raceResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\RaceResult $raceResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(RaceResult $raceResult)
    {
        //
    }
}
