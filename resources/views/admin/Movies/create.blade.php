@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Text Editors
                <small>Advanced form element</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- /.box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titles</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('movie.store')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Movie Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="subtitle">Movie overview</label>
                                    <input type="text" class="form-control" id="overview" name="overview" placeholder="Overview">
                                </div>

                                <div class="form-group">
                                    <label for="release_year">Release Year</label>
                                    <input type="number" class="form-control" id="year" name="release_year" placeholder="Release Year">
                                </div>

                                <div class="form-group">
                                    <label>Cast</label>
                                    <select  name="cast[]" class=" form-control select2 select2-hidden-accessible" multiple=""
                                            data-placeholder="Select a Cast" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                      @foreach($casts as $cast)
                                          <option value="{{$cast->id}}">{{$cast->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Theater</label>
                                    <select  name="theatre[]" class=" form-control select2 select2-hidden-accessible" multiple=""
                                             data-placeholder="Select a Theatre" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        @foreach($theatres as $theatre)
                                            <option value="{{$theatre->id}}">{{$theatre->theater_name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                           <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button"  href="{{route('movie.index')}}" class="btn btn-warning">Back</a>
                            </div>
                        </form>
                    </div>


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('footerSection')
    <script src="{{asset('admin/plugins/select2/sel.js')}}"></script>
    <script>
        $(document).ready(function (){
            $(".select2").select2();
        });
    </script>
@endsection
