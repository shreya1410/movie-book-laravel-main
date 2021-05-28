<?php

namespace App\Http\Controllers;

use App\Models\cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $casts = cast::all();
       return view('admin/cast/show',compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cast/create');
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
            'name' => 'required',
            'bio'=>'required',
            'birth_date'=>'required',

        ]);
        $casts = new cast;
        $casts->name= $request->name;
        $casts->bio = $request->bio;
        $casts->date_of_birth = $request->birth_date;
        $casts->save();

        return redirect(route('cast.index'));
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
        $cast = cast::where('id',$id)->first();
        return view('admin/cast/edit',compact('cast'));
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
            'name' => 'required',
            'bio'=>'required',
            'date_of_birth'=>'required',
        ]);
        $casts = cast::find($id);
        $casts->name= $request->name;
        $casts->bio = $request->bio;
        $casts->date_of_birth = $request->date_of_birth;
        $casts->save();

        return redirect(route('cast.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cast::where('id',$id)->delete();
        return redirect()->back();
    }
}
