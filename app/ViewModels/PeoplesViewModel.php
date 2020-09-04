<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class PeoplesViewModel extends ViewModel
{
    public $people;
    public $page;

    public function __construct($people, $page)
    {
        $this->page = $page;
        $this->people = $people;
    }

    public function people(){
        return collect($this->people)->map(function($people){
            return collect($people)->merge([
                'profile_path'=> $people['profile_path']?
                'https://image.tmdb.org/t/p/w235_and_h235_face/'.$people['profile_path']:
                'https://ui-avatars.com/api/?size=235&name='.$people['profile_path'],

                'known_for' => collect($people['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                    collect($people['known_for'])->where('media_type', 'tv')->pluck('name')
                )->implode(", "),
            ])->only([
                'name', 'id', 'profile_path' , 'known_for',
            ]);

        });
    }

    public function previous(){
        return $this->page > 1 ? $this->page -1 : null;
    }

    public function next(){
        return $this->page < 500 ? $this->page +1 : null;
    }
}
