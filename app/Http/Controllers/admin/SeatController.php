<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\seats;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = seats:: all();
        return view('admin/Seats/show',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/Seats/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'seat_number'=> ' required',
            'seat_price'=>'required',
        ]);
        $seats = new seats();
        $seats->seat_number = $request->seat_number;
        $seats->seat_price = $request->seat_price;
        $seats->save();
        return  redirect(route('seats.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seat = seats::where('id',$id)->first();
        return view('admin/Seats/edit',compact('seat'));
        return redirect('admin/home');
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
        $this->validate($request,[
            'seat_number'=> ' required',
            'seat_price'=>'required',
        ]);
        $seats = seats::find($id);
        $seats->seat_number = $request->seat_number;
        $seats->seat_price = $request->seat_price;
        $seats->save();
        return  redirect(route('seats.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        seats::where('id',$id)->delete();
        return redirect()->back();
    }
}
