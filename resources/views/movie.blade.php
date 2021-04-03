@extends('template')

@section('title', 'Movie')

@section('sidebar')
    @parent
    <div class="d-flex align-items-center flex-md-row mb-4">
        <div class="btn-group" style="margin: auto">
            <a href="/" class="btn btn-sm btn-outline-secondary">Kembali</a>
            <a href="/" class="btn btn-sm btn-outline-secondary">Lihat Semua Film</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/300x250?theme=thumb"
             alt="Thumbnail [300x250]" style="width: 300px; height: 250px;"
             src="{{$movie->photo}}"
             data-holder-rendered="true">
        <div class="card-body d-flex flex-column align-items-start" style="width: 40%">
            <h3 class="mb-0">{{$movie->title}}</h3>
            <div class="mb-1 text-muted">{{$movie->rating}}/5</div>
            <p class="card-text">{{$movie->description}}</p>
            <a href="/{{$movie->id}}/genre/{{$genre->id}}">Kategori: {{$genre->name}}</a>
        </div>
        <div class="card-body d-flex flex-column align-items-start" style="width: 40%">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Episode</th>
                    <th scope="col">Judul</th>
                </tr>
                </thead>
                <tbody>
                @foreach($episodes as $episode)
                    <tr>
                        <th scope="row">{{$episode->episode}}</th>
                        <td>{{$episode->title}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div style="margin: auto">
                {{$episodes->links()}}
            </div>
        </div>
    </div>


@endsection
