@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Movies</h1>
    <ul class="row d-flex">
        @foreach ($movies as $movie)
            <li class="card col-5 p-1 m-3">
                <h1>{{$movie-> title}}</h1>
                <h3>{{$movie-> original_title}}</h3>
                <h4>{{$movie-> nationality}}</h4>
                <h3>{{$movie-> date}}</h3>
                <h2>{{$movie-> vote}}</h2>
            </li>
        @endforeach
    </ul>
@endsection
