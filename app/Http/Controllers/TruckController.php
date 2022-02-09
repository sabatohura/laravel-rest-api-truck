<?php

namespace App\Http\Controllers;
use App\Models\Truck;
use Illuminate\Support\Str; 
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Truck::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'plate_number'=>'required',
            'vehicle_name'=>'required',
            'driver_name' =>'required',
            'driver_phone'=>'required'
        ]);
        return Truck::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Truck::find($id);
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
        $request->validate([
            'plate_number'=>'required',
            'vehicle_name'=>'required',
            'driver_name' =>'required',
            'driver_phone'=>'required'
        ]);
        $truck = Truck::find($id);
        $truck->update($request->all());
        return $truck;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Truck::destroy($id);
        
    }
    /**
     * Search Product by name
     *
     * @param  Str  $name
     * @return \Illuminate\Http\Response
     */
    public function findName($name)
    {
        //
        return Truck::where('plate_number','like','%'. $name.'%')->get();
        
    }
}
