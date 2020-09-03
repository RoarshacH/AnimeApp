<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class SearchDropdown extends Component
{
    public $search = '';
    public function render()
    {
        $searchResults = [];
        if (strlen($this->search)> 2 ) {
            $suffix = config('services.MovieDB.token');
            $httpRequest = 'https://api.themoviedb.org/3/search/tv?api_key='.$suffix.'&query='.$this->search;
            $searchResults = Http::get($httpRequest)->json()['results'];
        }
        // dump($searchResults);
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(6),
        ]);

    }
}
