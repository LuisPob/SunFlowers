<?php

namespace App\Http\Controllers;

use App\Models\compra;
use App\Http\Requests\StorecompraRequest;
use App\Http\Requests\UpdatecompraRequest;

class CompraController extends Controller
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
     * @param  \App\Http\Requests\StorecompraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecompraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecompraRequest  $request
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecompraRequest $request, compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(compra $compra)
    {
        //
    }
}
