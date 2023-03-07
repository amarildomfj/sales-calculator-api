<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductAdditionalProductRequest;
use App\Http\Requests\UpdateProductAdditionalProductRequest;
use App\Models\ProductAdditionalProduct;

class ProductAdditionalProductController extends Controller
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
     * @param  \App\Http\Requests\StoreProductAdditionalProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductAdditionalProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAdditionalProduct  $productAdditionalProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAdditionalProduct $productAdditionalProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAdditionalProduct  $productAdditionalProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAdditionalProduct $productAdditionalProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductAdditionalProductRequest  $request
     * @param  \App\Models\ProductAdditionalProduct  $productAdditionalProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductAdditionalProductRequest $request, ProductAdditionalProduct $productAdditionalProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAdditionalProduct  $productAdditionalProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAdditionalProduct $productAdditionalProduct)
    {
        //
    }
}
