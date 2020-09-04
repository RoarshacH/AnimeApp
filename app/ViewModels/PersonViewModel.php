<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class PersonViewModel extends ViewModel
{
    public $person;
    public $social;
    public $credits;
    public function __construct($person, $social, $credits)
    {
        $this->person= $person;
        $this->social = $social;
        $this->credits = $credits;

    }

    public function person(){
        return collect($this->person)->merge([
                'birthday' => Carbon::parse($this->person['birthday'])->format('M d, Y'),
                'age' => Carbon::parse($this->person['birthday'])->age,
                'profile_path'=> $this->person['profile_path']?
                'https://image.tmdb.org/t/p/w300/'.$this->person['profile_path']:
                'https://ui-avatars.com/api/?size=300&name='.$this->person['profile_path'],
                // 'known_for' => collect($person['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                //     collect($people['known_for'])->where('media_type', 'tv')->pluck('name')
                // )->implode(", "),
            ]);

    }

    public function social(){
        return collect($this->social)->merge([
            'twitter' => $this->social['twitter_id']?'https://twitter.com/'.$this->social['twitter_id']: null,
            'facebook' => $this->social['facebook_id']?'https://facebook.com/'.$this->social['facebook_id']: null,
            'instagram' => $this->social['instagram_id']?'https://instagram.com/'.$this->social['instagram_id']: null,
        ]);
    }

    public function credits(){
        $cast = collect($this->credits)->get('cast');
        $title;

        return collect($cast)->sortByDesc('popularity')->take(15)->map(function($item) {
            if (isset($item['title'])) {
                $title = $item['title'];
            } else if(isset($item['name'])) {
                $title = ($item['name']);
            }
            else{
                $title = "Untitled";
            }
            return collect($item)->merge([
                'poster_path'=> $item['poster_path']?
                    'https://image.tmdb.org/t/p/w185/'.$item['poster_path']:
                    'https://via.placeholder.com/185x278',
                'title' => $title,
            ]);
        });
    }
}

