@extends('layout.app')

@section('content')

    <h1>hello</h1>

    <ul>
        @foreach($posts as $post)
            <div class="image-container">
                <img src="/images/{{$post->path}}" alt="" >
            </div>
            <li>{{$post->id}} - <a href="{{route('posts.show' , $post->id)}}">{{$post->title}} </a></li>
        @endforeach
    </ul>


@endsection
