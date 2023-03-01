<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDirectCostRequest;
use App\Http\Requests\UpdateDirectCostRequest;
use App\Models\DirectCost;

class DirectCostController extends Controller
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
     * @param  \App\Http\Requests\StoreDirectCostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirectCostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DirectCost  $directCost
     * @return \Illuminate\Http\Response
     */
    public function show(DirectCost $directCost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DirectCost  $directCost
     * @return \Illuminate\Http\Response
     */
    public function edit(DirectCost $directCost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirectCostRequest  $request
     * @param  \App\Models\DirectCost  $directCost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirectCostRequest $request, DirectCost $directCost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DirectCost  $directCost
     * @return \Illuminate\Http\Response
     */
    public function destroy(DirectCost $directCost)
    {
        //
    }
}
