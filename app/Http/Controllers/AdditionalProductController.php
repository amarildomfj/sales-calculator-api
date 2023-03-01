<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdditionalProductRequest;
use App\Http\Requests\UpdateAdditionalProductRequest;
use App\Models\AdditionalProduct;

class AdditionalProductController extends Controller
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
     * @param  \App\Http\Requests\StoreAdditionalProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdditionalProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdditionalProduct  $additionalProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalProduct $additionalProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdditionalProduct  $additionalProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalProduct $additionalProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdditionalProductRequest  $request
     * @param  \App\Models\AdditionalProduct  $additionalProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdditionalProductRequest $request, AdditionalProduct $additionalProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdditionalProduct  $additionalProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalProduct $additionalProduct)
    {
        //
    }
}
