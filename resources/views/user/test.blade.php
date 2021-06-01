@extends('user/app')
@section('main-content')

<div class="container">
    <div class="row">
        @foreach($seats as $seat)
                <div class="card-group" >
                    <div class="card content">
                        <div class="card-body">
                            <button value=" {{$seat->seat_number}}" onclick="alert(this.value)">
                                {{$seat->seat_number}}</button>
                        </div>
                    </div>
                </div>

        @endforeach
    </div>
    <input value="seat" id="seat">
</div>

@endsection
