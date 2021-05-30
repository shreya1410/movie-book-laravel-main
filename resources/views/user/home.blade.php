@extends('user/app')
@section('main-content')
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <a href="{{route('post',$post->id)}}">
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Movie Name :{{$post->title}}</h5>
                        <p class="card-text">Movie Overview :{{$post->overview}}</p>
                        <p class="card-text">Movie Release Year :{{$post->release_year}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <hr>
@endsection




























{{--            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">--}}
{{--                <div class="post-preview">--}}

{{--                    @foreach($posts as $post)--}}
{{--                        <a href="{{route('post',$post->id)}}">--}}
{{--                            <h2 class="post-title">--}}
{{--                                {{$post->title}}--}}
{{--                            </h2>--}}
{{--                            <h3 class="post-subtitle">--}}
{{--                                {{$post->overview}}--}}
{{--                            </h3>--}}
{{--                        </a>--}}
{{--                </div>--}}
{{--                    @endforeach--}}

{{--                <hr>--}}

{{--            </div>--}}

