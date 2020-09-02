<?php

namespace App\Http\Controllers;

use App\product_cars;
use Illuminate\Http\Request;

class ProductCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p_cars = product_cars::all();
        return $p_cars;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = [];
        $data = $request->all();
        foreach($data as $order)
        {
           product_cars::create([
             "product_id" => $order['product_id'],
             "cart_id" => $order['cart_id'],
             "quantity" => $order['quantity'],
           ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function show(product_cars $product_cars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function edit(product_cars $product_cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product_cars $product_cars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product_cars  $product_cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(product_cars $product_cars)
    {
        //
    }
}
