<?php

namespace App\Http\Controllers;

use App\Models\Zodiac;
use App\Http\Requests\StoreZodiacRequest;
use App\Http\Requests\UpdateZodiacRequest;

class ZodiacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreZodiacRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZodiacRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function show(Zodiac $zodiac)
    {
        // return view('zodiac.show', ['zodiac' => $zodiac]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function edit(Zodiac $zodiac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZodiacRequest  $request
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZodiacRequest $request, Zodiac $zodiac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zodiac  $zodiac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zodiac $zodiac)
    {
        //
    }
}
