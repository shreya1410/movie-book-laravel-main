<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class MoviedisplayController extends Controller
{
        public function post(movie $id){
            return view('user.post',compact('id'));
        }
}
