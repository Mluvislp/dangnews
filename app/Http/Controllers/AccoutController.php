<?php

namespace App\Http\Controllers;

use App\Models\accout;
use App\Http\Requests\StoreaccoutRequest;
use App\Http\Requests\UpdateaccoutRequest;

class AccoutController extends Controller
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
     * @param  \App\Http\Requests\StoreaccoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaccoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accout  $accout
     * @return \Illuminate\Http\Response
     */
    public function show(accout $accout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accout  $accout
     * @return \Illuminate\Http\Response
     */
    public function edit(accout $accout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaccoutRequest  $request
     * @param  \App\Models\accout  $accout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaccoutRequest $request, accout $accout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accout  $accout
     * @return \Illuminate\Http\Response
     */
    public function destroy(accout $accout)
    {
        //
    }
}
