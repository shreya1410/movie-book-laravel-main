@extends('user/app')


@section('main-content')

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                        {{$id->title}}
                   @foreach($id->casts as $cast)
                      <a href="{{route('cast',$cast->id)}}">
                          {{$cast->name}}
                      </a>
                    @endforeach


                    <br><br>
                    @foreach($id->theatre as $theater)
                      {{$theater->theater_name}}
                    @endforeach

                </div>
            </div>
        </div>
    </article>


@endsection
