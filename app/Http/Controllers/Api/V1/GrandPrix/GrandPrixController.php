<?php

namespace App\Http\Controllers\Api\V1\GrandPrix;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGrandPrixRequest;
use App\Http\Requests\UpdateGrandPrixRequest;
use App\Models\GrandPrix;

class GrandPrixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GrandPrix::all();

        $collection = collect(PilotResource::collection($data));

        return response($collection);
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
     * @param \App\Http\Requests\StoreGrandPrixRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrandPrixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\GrandPrix $grandPrix
     * @return \Illuminate\Http\Response
     */
    public function show(GrandPrix $grandPrix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\GrandPrix $grandPrix
     * @return \Illuminate\Http\Response
     */
    public function edit(GrandPrix $grandPrix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateGrandPrixRequest $request
     * @param \App\Models\GrandPrix $grandPrix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGrandPrixRequest $request, GrandPrix $grandPrix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\GrandPrix $grandPrix
     * @return \Illuminate\Http\Response
     */
    public function destroy(GrandPrix $grandPrix)
    {
        //
    }
}
