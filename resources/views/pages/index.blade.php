

@extends('layout.app')

@section('content')
    <div class="jumbotron text-center">

         <h1>{{$title}}</h1>
        <p>This page belongs to Deerwalk Group Limited. No any other post will be posted here</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>         <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>

    </div>
@endsection