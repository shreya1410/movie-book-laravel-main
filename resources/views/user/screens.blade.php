@extends('user/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

{{--<link href="{{ asset('user/screenlayout.css') }}" rel="stylesheet">--}}

        <div class="container">
            <div class="row">

                @foreach($seats as $seat)
{{--                    <a href="{{route('seat',$seat->id)}}">buy--}}
                    <div class="card-group" >
                        <div class="card content">
                            <div class="card-body">
                                <button value=" {{$seat->seat_number}}">{{$seat->seat_number}}</button>


{{--                                <button value=" {{$seat->seat_number}}"--}}
{{--                              onclick="seat.value=this.value">--}}
{{--                                    {{$seat->seat_number}}</button>--}}

                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>


    <div class="booking-details">
        <p>Movie: <span>  {{$id->title}}</span></p>
        <p>Overview: <span>{{$id->overview}}</span></p>

        <div class="form-group">
            <label>Select seats</label>
            <select  name="seats[]" class=" form-control select2 select2-hidden-accessible" multiple=""
                     data-placeholder="Select seat" style="width: 100%;" tabindex="-1" aria-hidden="true">
                @foreach($seats as $seat)
                    <option value="{{$seat->id}}">{{$seat->seat_number}} </option>
                @endforeach
            </select>
        </div>
        <button><a href="{{route('bookmyticket',$id)}}">buy</a> </button>
        <ul id="selected-seats">  </ul>

        <div id="legend"></div>
    </div>
    <div style="clear:both"></div>


@endsection



@section('footerSection')
    <script src="{{asset('admin/plugins/select2/sel.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
        $(document).ready(function (){
            $(".select2").select2();
        });
    </script>
@endsection



{{--<script src="{{asset('user/js/shows.js')}}"></script>--}}
{{--<script src="{{asset('user/js/jquery.seat-charts.min.js')}}"></script>--}}

