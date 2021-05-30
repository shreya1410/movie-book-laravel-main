<?php

namespace App\Http\Controllers\admin;

use App\Models\theatre;
use Illuminate\Http\Request;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $theatres = theatre::all();
       return view('admin/theatre/show',compact('theatres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/theatre/create');
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
            'theatre_name' => 'required',
            'show_time'=>'required',

        ]);
        $theatres = new theatre;
        $theatres->theater_name= $request->theatre_name;
        $theatres->show_time = $request->show_time;
        $theatres->save();

        return redirect(route('theatre.index'));
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
        $theatres = theatre::where('id',$id)->first();
        return view('admin/theatre/edit',compact('theatres'));
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
            'theatre_name' => 'required',
            'show_time'=>'required',
        ]);
        $theatres = theatre::find($id);
        $theatres->theater_name= $request->theatre_name;
        $theatres->show_time = $request->show_time;
        $theatres->save();

        return redirect(route('theatre.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        theatre::where('id',$id)->delete();
        return redirect()->back();
    }
}
