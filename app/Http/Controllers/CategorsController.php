<?php

namespace App\Http\Controllers;

use App\Models\Categors;
use App\Http\Requests\StoreCategorsRequest;
use App\Http\Requests\UpdateCategorsRequest;

class CategorsController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categors  $categors
     * @return \Illuminate\Http\Response
     */
    public function show(Categors $categors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categors  $categors
     * @return \Illuminate\Http\Response
     */
    public function edit(Categors $categors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorsRequest  $request
     * @param  \App\Models\Categors  $categors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorsRequest $request, Categors $categors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categors  $categors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categors $categors)
    {
        //
    }
}
