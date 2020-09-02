<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $suffix = config('services.MovieDB.token');
        $httpRequest = 'https://api.themoviedb.org/3/tv/top_rated?api_key='.$suffix ;
        $topRatedTV = Http::get($httpRequest)->json()['results'];
        $httpRequest = 'https://api.themoviedb.org/3/tv/on_the_air?api_key='.$suffix ;
        $popularTV =  Http::get($httpRequest)->json()['results'];
        $httpRequest = 'https://api.themoviedb.org/3/genre/tv/list?api_key='.$suffix ;
        $genresList =  Http::get($httpRequest)->json()['genres'];

        $genres = collect($genresList)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });
        // dd($popularTV);
        return view('index',
            ['popularTV'=>$popularTV,
            'topRatedTv' =>$topRatedTV,
            'genres' => $genres,
            ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suffix = config('services.MovieDB.token');
        $httpRequest = 'https://api.themoviedb.org/3/tv/'.$id.'?api_key='.$suffix.'&append_to_response=credits,videos,images' ;
        $tvDetails = Http::get($httpRequest)->json();
        // dd($tvDetails);

        return view('show', [
            'details' =>$tvDetails,
        ]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
