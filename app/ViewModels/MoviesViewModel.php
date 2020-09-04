<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularTv;
    public $topRatedTV;
    public $genres;
    public function __construct($popularTv, $topRatedTV, $genres)
    {
        $this->popularTV = $popularTv;
        $this->topRatedTV = $topRatedTV;
        $this->genres = $genres;
        //
    }

    public function topRatedTV(){
        return $this->formatMovies($this->topRatedTV);
    }
    public function popularTV(){
        return $this->formatMovies($this->popularTV);
    }

    public function genres(){
        return collect($this->genres)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });

    }

    private function formatMovies($tvShow){
        // @foreach ($show['genre_ids'] as $item)
        //                     {{$genres->get($item)}} @if (!$loop->last)
        //                         ,

        return collect($tvShow)->map(function($show){
            $genreFormatted = collect($show['genre_ids'])->mapWithKeys(function($value){
                return [$value=> $this->genres()->get($value)];
            })->implode(', ');
            return collect($show)->merge([
                'poster_path'=> 'https://image.tmdb.org/t/p/w500/'.$show['poster_path'],
                'genre' => $genreFormatted,
            ])->only([
                'poster_path', 'id', 'genre', 'genre_ids', 'name', 'first_air_date', 'vote_average'
            ]);

        });
    }
}
