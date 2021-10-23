<?php

namespace App\Http\Controllers;

use App\Models\grocery;
use App\Models\table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables=Table::all();
        return view('sdt',compact('tables'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
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
        table::insert($data);
        dd($data);
        return redirect()->to('sdt');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table=table::find($id);
        return view('edit_product',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $table=table::find($id);
        $table->id=$request->id;
        $table->product_id=$request->product_id;
        $table->product_name=$request->product_name;
        $table->product_price=$request->product_price;
        $table->product_quantity=$request->product_quantity;
        $table->update();
        return redirect()->to('sdt');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table=table::find($id);
        $table->delete();
        return redirect()->to('sdt');
    }
}
