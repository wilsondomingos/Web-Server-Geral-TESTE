<?php

namespace App\Http\Controllers;

use App\Models\Produt;
use App\Http\Requests\StoreProdutRequest;
use App\Http\Requests\UpdateProdutRequest;

class ProdutController extends Controller
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
     * @param  \App\Http\Requests\StoreProdutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function show(Produt $produt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function edit(Produt $produt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdutRequest  $request
     * @param  \App\Models\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutRequest $request, Produt $produt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produt $produt)
    {
        //
    }
}
