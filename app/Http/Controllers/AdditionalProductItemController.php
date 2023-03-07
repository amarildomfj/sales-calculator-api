<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdditionalProductItemRequest;
use App\Http\Requests\UpdateAdditionalProductItemRequest;
use App\Models\AdditionalProductItem;

class AdditionalProductItemController extends Controller
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
     * @param  \App\Http\Requests\StoreAdditionalProductItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdditionalProductItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdditionalProductItem  $AdditionalProductItem
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalProductItem $AdditionalProductItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdditionalProductItem  $AdditionalProductItem
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalProductItem $AdditionalProductItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdditionalProductItemRequest  $request
     * @param  \App\Models\AdditionalProductItem  $AdditionalProductItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdditionalProductItemRequest $request, AdditionalProductItem $AdditionalProductItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdditionalProductItem  $AdditionalProductItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalProductItem $AdditionalProductItem)
    {
        //
    }
}
