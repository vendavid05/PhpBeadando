<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Flight::with('airline')->get();
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
     * @param  \App\Http\Requests\StoreFlightRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlightRequest $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'airline_id' => 'required|exists:airlines,id',
            'seat_limit' => 'required|integer|min:1',
        ]);

        $flight = Flight::create($validated);

        return response()->json($flight, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        return $flight->load('airline');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlightRequest  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        $validated = $request->validate([
            'date' => 'sometimes|required|date',
            'airline_id' => 'sometimes|required|exists:airlines,id',
            'seat_limit' => 'sometimes|required|integer|min:1',
        ]);

        $flight->update($validated);

        return response()->json($flight);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
    }
}
