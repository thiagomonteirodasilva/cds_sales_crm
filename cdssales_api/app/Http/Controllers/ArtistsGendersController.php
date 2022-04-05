<?php

namespace App\Http\Controllers;

use App\Models\ArtistsGenders;
use App\Http\Requests\StoreArtistsGendersRequest;
use App\Http\Requests\UpdateArtistsGendersRequest;

class ArtistsGendersController extends Controller
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
     * @param  \App\Http\Requests\StoreArtistsGendersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtistsGendersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArtistsGenders  $artistsGenders
     * @return \Illuminate\Http\Response
     */
    public function show(ArtistsGenders $artistsGenders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtistsGenders  $artistsGenders
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtistsGenders $artistsGenders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtistsGendersRequest  $request
     * @param  \App\Models\ArtistsGenders  $artistsGenders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtistsGendersRequest $request, ArtistsGenders $artistsGenders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtistsGenders  $artistsGenders
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtistsGenders $artistsGenders)
    {
        //
    }
}
