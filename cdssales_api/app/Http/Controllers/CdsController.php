<?php

namespace App\Http\Controllers;

use App\Models\Cds;
use App\Http\Requests\StoreCdsRequest;
use App\Http\Requests\UpdateCdsRequest;

class CdsController extends Controller
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
     * @param  \App\Http\Requests\StoreCdsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCdsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cds  $cds
     * @return \Illuminate\Http\Response
     */
    public function show(Cds $cds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cds  $cds
     * @return \Illuminate\Http\Response
     */
    public function edit(Cds $cds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCdsRequest  $request
     * @param  \App\Models\Cds  $cds
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCdsRequest $request, Cds $cds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cds  $cds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cds $cds)
    {
        //
    }
}
