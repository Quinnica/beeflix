@extends('template')

@section('title', 'Home')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            @foreach($moviesWithGenre as $movieWithGenre)
                <h1 style="color: #1b4b72">{{$movieWithGenre->name}}</h1>
                <div class="row">
                    @foreach($movieWithGenre->movies as $movie)
                        <div class="col-md-3">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{$movie->photo}}" alt="No Img"
                                     style="height: 200px; width: 100%; display: block;"/>
                                <div class="card-body">
                                    <p class="card-text">{{$movie->title}}</p>
                                    <a href="/movie/{{$movie->id}}" class="btn btn-sm btn-outline-secondary">Lihat
                                        Film</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
