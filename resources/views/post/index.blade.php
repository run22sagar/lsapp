@extends('layout.app')

@section('content')
    @if(count($posts)>0)
        @foreach($posts as $post)
{{--        {{$posts}}--}}
      <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>

      </div>
        @endforeach
        {{$posts->links()}}
    @else
    <p>No File Found</p>

    @endif




    @endsection
