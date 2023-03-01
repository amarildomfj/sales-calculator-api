<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndirectCostRequest;
use App\Http\Requests\UpdateIndirectCostRequest;
use App\Models\IndirectCost;

class IndirectCostController extends Controller
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
     * @param  \App\Http\Requests\StoreIndirectCostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndirectCostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IndirectCost  $indirectCost
     * @return \Illuminate\Http\Response
     */
    public function show(IndirectCost $indirectCost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndirectCost  $indirectCost
     * @return \Illuminate\Http\Response
     */
    public function edit(IndirectCost $indirectCost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndirectCostRequest  $request
     * @param  \App\Models\IndirectCost  $indirectCost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndirectCostRequest $request, IndirectCost $indirectCost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndirectCost  $indirectCost
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndirectCost $indirectCost)
    {
        //
    }
}
