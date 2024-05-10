@extends('layout.main')

@section('content')

<h1>MOVIES</h1>

<div class="container d-flex flex-wrap ">
    @foreach ($movies as $movie)

    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">{{$movie->original_title}}</p>
            <p>{{$movie->nationality}}</p>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
        </div>
    </div>

    @endforeach
</div>

@endsection
