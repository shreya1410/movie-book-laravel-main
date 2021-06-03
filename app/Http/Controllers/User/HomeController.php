<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\cast;
use App\Models\movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = movie::all();
        return view('user.home',compact('posts'));
    }

    public function casts(cast $id){
       $posts =$id->movies();
        return view('user.home',compact('posts'));
    }
}
