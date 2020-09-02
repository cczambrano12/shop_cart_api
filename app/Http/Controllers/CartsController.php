<?php

namespace App\Http\Controllers;

use App\carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = carts::all();
        return $carts;
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
        $cart = carts::create($request->all());
        return $cart;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return carts::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = carts::find($id);
        $cart->status = 'completed';
        $cart->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(carts $carts)
    {
        //
    }

}
