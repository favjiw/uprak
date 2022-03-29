<?php

namespace App\Http\Controllers;

use App\Models\Hotelayo;
use Illuminate\Http\Request;

class HotelayoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hotelayo::all();
        return view('hotels', ['hotels' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Hotelayo::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('hotel-image/', $request->file('image')->getClientOriginalName());
            $input->image = $request->file('image')->getClientOriginalName();
            $input->save();
        }
        return redirect('/hotels');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotels = Hotelayo::find($id);
        return view('detail', ['hotel'=>$hotels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotels = Hotelayo::find($id);
        return view('edit', ['hotel'=>$hotels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Hotelayo::find($id); 
        $data->update($request->all()); 

        if($request->hasFile('image')){
            $request->file('image')->move('hotel-image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('/hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Hotelayo::find($id);
        $data->delete();
        return redirect('/hotels')->with('Success', 'Data has been deleted.');
    }
}
