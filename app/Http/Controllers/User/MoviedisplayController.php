<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\movie;
use App\Models\theatre;
use Illuminate\Http\Request;

class MoviedisplayController extends Controller
{
        public function post(movie $id){
            return view('user.post',compact('id'));
        }

        public function theater(movie $id){
            return view('user.screens',compact('id'));
        }
}
