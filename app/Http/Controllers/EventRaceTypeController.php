<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRaceTypeRequest;
use App\Http\Requests\UpdateEventRaceTypeRequest;
use App\Models\EventRaceType;

class EventRaceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEventRaceTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRaceTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventRaceType  $eventRaceType
     * @return \Illuminate\Http\Response
     */
    public function show(EventRaceType $eventRaceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventRaceType  $eventRaceType
     * @return \Illuminate\Http\Response
     */
    public function edit(EventRaceType $eventRaceType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRaceTypeRequest  $request
     * @param  \App\Models\EventRaceType  $eventRaceType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRaceTypeRequest $request, EventRaceType $eventRaceType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventRaceType  $eventRaceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventRaceType $eventRaceType)
    {
        //
    }
}
