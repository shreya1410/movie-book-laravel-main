<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\seats;
use Illuminate\Http\Request;

class SeatDisplayController extends Controller
{
    public function showseat(){
        $seats = seats::all();
        return view('user.test',compact('seats'));
    }
}
