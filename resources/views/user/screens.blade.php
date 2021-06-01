@extends('user/app')
@section('main-content')

{{--<link href="{{ asset('user/screenlayout.css') }}" rel="stylesheet">--}}

        <div class="container">
            <div class="row">
                @foreach($seats as $seat)
                    <div class="card-group" >
                        <div class="card content">
                            <div class="card-body">
                                <button value=" {{$seat->seat_number}}"
                              onclick="seat.value=this.value">
                                    {{$seat->seat_number}}</button>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>


    <div class="booking-details">
        <p>Movie: <span>  {{$id->title}}</span></p>
        <p>Overview: <span>{{$id->overview}}</span></p>
        <p>Seat selected: </p>
        <input type="text" value="" id="seat" name="seat">
        <ul id="selected-seats">  </ul>
        <p>Tickets: <span id="counter">0</span></p>
        <p>Total:   <span id="total">0</span></b></p>

        <button class="checkout-button">BUY</button>

        <div id="legend"></div>
    </div>
    <div style="clear:both"></div>


@endsection






{{--<script src="{{asset('user/js/shows.js')}}"></script>--}}
{{--<script src="{{asset('user/js/jquery.seat-charts.min.js')}}"></script>--}}

