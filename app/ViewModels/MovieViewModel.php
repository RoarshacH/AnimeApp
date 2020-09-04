<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $tvDetails;

    public function __construct($tvDetails)
    {
        $this->details = $tvDetails;
    }

    public function details(){
        return collect($this->details)->merge([
            'poster_path'=> 'https://image.tmdb.org/t/p/w500/'.$this->details['poster_path'],
            'genre' => collect($this->details['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->details['credits']['crew'])->take(5),
            'cast' => collect($this->details['credits']['cast'])->take(10),
        ])->only([
            'poster_path', 'id', 'genre', 'name', 'first_air_date', 'vote_average' , 'overview' , 'crew' , 'cast' , 'videos',
        ]);
    }
}
