<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $genre = Genre::where('id', $movie->genre_id)->first();
        $episodes = Episode::where('movie_id', $movie->id)->paginate(3);
        return view('movie', ['movie' => $movie, 'genre' => $genre, 'episodes' => $episodes]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Movie $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
