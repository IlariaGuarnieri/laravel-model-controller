@extends('layout.main')

@section('content')

<h1>{{$title}}</h1>

<div class="container d-flex flex-wrap ">
    <div class="row row-cols-3 ">
        @foreach ($movies as $movie)
        <div class="col">

            <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text">{{$movie->original_title}}</p>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
                    <a href="{{route('details', ['id' => $movie -> id])}}">Dettaglio</a>
                </div>
            </div>

        </div>


        @endforeach

    </div>
</div>

@endsection

