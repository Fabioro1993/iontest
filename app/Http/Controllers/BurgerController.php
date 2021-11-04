<?php

namespace App\Http\Controllers;

use App\Http\Resources\BurgerResource;
use Illuminate\Http\Request;
use App\Models\Burger;

class BurgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $burgers = Burger::all();
        return view('home', compact('burgers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function show(Burger $burger)
    {
        return view('show', compact('burger'));

        //return new BurgerResource($burger);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function edit(Burger $burger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Burger $burger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Burger $burger)
    {
        //
    }
}
