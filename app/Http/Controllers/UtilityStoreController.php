<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Utility_store;
use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class UtilityStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utility_stores=Utility_store::all();
        return view('utility_database',compact('utility_stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utility_form');
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
       Utility_store::insert($data);
       return redirect()->to('utility_database');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utility_store  $utility_store
     * @return \Illuminate\Http\Response
     */
    public function show(Utility_store $utility_store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utility_store  $utility_store
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utility_stores=Utility_store::find($id);
        return view('edit_utility_form',compact('utility_stores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utility_store  $utility_store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $utility_stores=Utility_store::find($id);
        $utility_stores->id=$request->id;
        $utility_stores->commodity_id=$request->commodity_id;
        $utility_stores->commodity_name=$request->commodity_name;
        $utility_stores->commodity_price=$request->commodity_price;
        $utility_stores->commodity_quantity=$request->commodity_quantity;
        $utility_stores->update();
        return redirect()->to('utility_database');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utility_store  $utility_store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utility_store = Utility_store::find($id);
        $utility_store->delete();
        return redirect()->to('utility_database');


    }
}
