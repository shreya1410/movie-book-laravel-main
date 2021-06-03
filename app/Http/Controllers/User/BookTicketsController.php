<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\bookseat;
use App\Models\theatre;
use Illuminate\Http\Request;

class BookTicketsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function bookmyticket(Request $request,theatre $theatre)
        {
            $seat = new bookseat();
            $data = [
                'user_id'=>auth()->user()->id,
                'theatre_id' =>$theatre->id
            ];
            $success = $seat->create($data);
        }
}
