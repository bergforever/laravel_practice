<?php

namespace App\Http\Controllers;

use App\Models\grocery;
use App\Models\Product;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('dt', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('_token');
        grocery::insert($data);
        return redirect()->to('dt');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function show(grocery $grocery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function edit(grocery $grocery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grocery $grocery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function destroy(grocery $grocery)
    {
        //
    }
}

