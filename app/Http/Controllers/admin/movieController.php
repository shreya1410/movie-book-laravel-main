<?php

namespace App\Http\Controllers\admin;

use App\Models\cast;
use App\Models\movie;
use App\Models\theatre;
use Illuminate\Http\Request;

class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = movie::all();
        return view('admin/Movies/show',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $casts = cast::all();
        $theatres = theatre::all();
        return view('admin/Movies/create',compact('casts','theatres'));
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
           'title'  => 'required',
            'overview' =>'required',
            'release_year' => 'required',

        ]);
        $movie = new movie;
        $movie->title = $request->title;
        $movie->overview = $request->overview;
        $movie->release_year = $request->release_year;
        $movie->save();
        $movie->casts()->sync($request->cast);
        $movie->theatre()->sync($request->theatre);

        return redirect(route('movie.index'));
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
        $movie = movie::with('casts')->where('id',$id)->first();
        $casts = cast::all();
        $theatres = theatre::all();
        return view('admin/Movies/edit',compact('casts','theatres','movie'));
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
            'title'  => 'required',
            'overview' =>'required',
            'release_year' => 'required',

        ]);

        $movie = movie::find($id);
        $movie->title = $request->title;
        $movie->overview = $request->overview;
        $movie->release_year = $request->release_year;
        $movie->casts()->sync($request->cast);
        $movie->theatre()->sync($request->theatre);
        $movie->save();

        return redirect(route('movie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        movie::where('id',$id)->delete();
        return redirect()->back();
    }
}
