<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\True_;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('utility_modal',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token','itemId']);
        $item = Item::insert($data);
        return $item;
       // return redirect()->to('utility_modal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Item::find($id);
        return $item->toArray();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {

        $items=Item::find($request->itemId);
        $items->item_id=$request->item_id;
        $items->item_name=$request->item_name;
        $items->item_price=$request->item_price;
        $items->item_quantity=$request->item_quantity;
        $items->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items=Item::find($id);
        if (!is_null($items)){
            $items->delete();
        }

        return true;
//        return redirect()->to('utility_modal');
    }
}
