<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Resources\BurgerResource;
use Illuminate\Support\Facades\DB;
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
        try {
            DB::beginTransaction();

            Burger::create([
                'name'          => $request->name,
                'description'   => $request->description,
                'regular_price' => $request->regular_price,
                'sale_price'    => $request->sale_price,
                'portion_size'  => $request->portion_size,
                'calories'      => $request->calories,
                'allegies'      => $request->allegies,
                'tags'          => $request->tags,
                'image'         => $request->image,
            ]);

            DB::commit();
            return Redirect::to('home');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
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
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $burger = Burger::findOrFail($id);
            $burger->fill($request->all());
            $burger->save();

            DB::commit();
            return Redirect::to('burger');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Burger  $burger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Burger $burger)
    {
        $burger->delete();
        return Redirect::to('home');
    }
}
