@extends('user/app')
@section('main-content')

    <article>
        <div class="container">
            <div class="row">

                    <div class="card">
                       Movie Title : {{$id->title}}
                        @foreach($id->casts as $cast)
                        <div class="card-body">
                            <a href="{{route('cast',$cast->id)}}">
                                <h5 class="card-title" >Cast in these Movie : {{$cast->name}}</h5></a>
                            <p class="card-text">Birth date of Cast : {{$cast->date_of_birth}}</p>
                            <p class="card-text"> Bio Of Cast : {{$cast->bio}}</p>
                        </div>
                        @endforeach

                        @foreach($id->theatre as $theater)
                        <div class="card-body">
                            <h5 class="card-title">Theatre Name :{{$theater->theater_name}}</h5>
                            <p class="card-text">Show Timing : {{$theater->show_time}}</p>
                            <a href="{{route('theater',$theater->id)}}">Book show</a>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </article>

@endsection
