@extends('user/app')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">

                    @foreach($posts as $post)
                        <a href="{{route('post',$post->id)}}">
                            <h2 class="post-title">
                                {{$post->title}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{$post->overview}}
                            </h3>
                        </a>
                </div>
                    @endforeach

                <hr>

            </div>
        </div>
    </div>

    <hr>
@endsection
