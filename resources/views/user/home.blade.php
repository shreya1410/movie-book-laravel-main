@extends('user/app')
@section('main-content')

    <div class="container">
        <div class="row">
            <div class="form-group">
                <input type="text" name="search" id="search" placeholder="Search movie" required/>
            </div>
            @foreach($posts as $post)
                <a href="{{route('post',$post->id)}}">
            <div class="card-group">
                <div class="card content">
                    <div class="card-body">
                        <h5 class="card-title mytable">Movie Name :{{$post->title}}</h5>
                        <p class="card-text">Movie Overview :{{$post->overview}}</p>
                        <p class="card-text">Movie Release Year :{{$post->release_year}}</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".myTable").filter(function() {
                $(this).parents(".content").toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
