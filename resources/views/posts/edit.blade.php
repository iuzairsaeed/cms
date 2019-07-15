@extends('layout.app')

@section('content')

    <h1> EDIT POST </h1>
    
    {!! Form::model($post ,['method'=>'PATCH' , 'action'=>['PostsController@update',$post->id]]) !!}
        
        {{csrf_field()}}
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title' , null , ['class'=>'form-control']) !!}

        {!! Form::submit('UPDATE Post' , ['class'=>'btn btn-info']) !!}

    {!! Form::close() !!}
        
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        <!-- <input type="text" placeholder="Enter Title" name="title" value="{{$post->title}}"> -->
        <!-- <input type="submit" name="submit" value="UPDATE"> -->

    {!! Form::open(['method'=>'DELETE' , 'action'=>['PostsController@destroy',$post->id]]) !!}
        {{csrf_field()}}
        <!-- <input type="hidden" name="_method" value="DELETE"> -->
        <!-- <input type="submit" value="DELETE"> -->
        {!! Form::submit('Delete Post' , ['class'=>'btn btn-danger']) !!}
        
    {!! Form::close() !!}

@endsection