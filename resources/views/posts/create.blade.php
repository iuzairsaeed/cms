@extends('layout.app')

@section('content')

    <h1>CREATE POST</h1>
    {{--THIS IS COMMENT--}}
    {{--<form method="post" action="/posts">--}}



    {!! Form::open(['method'=>'post' , 'action'=>'PostsController@store', 'files'=>true ]) !!}


        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title' , null , ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::file('file' , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
                {!! Form::submit('Create Post' , ['class'=>'btn btn-primary']) !!}
        </div>

        <!-- <input type="text" placeholder="Enter Title" name="title"> -->
        <!-- <input type="submit"> -->

    {!! Form::close() !!}

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
