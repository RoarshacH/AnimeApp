@extends('layouts.main')


@section('contents')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-anime">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Current Season
        </h2>
        <div class="owl-carousel owl-theme mt-5">
            @foreach ($popularTV as $show)
            <div class="item">
                <div class="mt-8">
                    <a href="{{'Tv/'. $show['id']}}">
                        <img src={{ $show['poster_path']}} alt="The Tv Show Poster">
                    </a>
                </div>
                <div class="mt-2">
                <a href="" class="text-lg mt-2 hover-text-gray:300"> {{$show['name']}}</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="ml-1">{{$show['vote_average']}}</span>
                        <span class="ml2"> | </span>
                    <span> {{$show['first_air_date']}}</span>
                    </div>
                    <div class="text-gray text-sm">
                        {{$show['genre']}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container mx-auto px-4 pt-16">
    <div class="popular-anime">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Tv Series
        </h2>
        <div class="owl-carousel owl-theme mt-5">
            @foreach ($topRatedTV as $show)
            <div class="item">
                <div class="mt-8">
                    <a href="{{'Tv/'. $show['id']}}">
                        <img src={{ $show['poster_path']}} alt="The Tv Show Poster">
                    </a>
                </div>
                <div class="mt-2">
                <a href="" class="text-lg mt-2 hover-text-gray:300"> {{$show['name']}}</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="ml-1">{{$show['vote_average']}}</span>
                        <span class="ml2"> | </span>
                    <span> {{$show['first_air_date']}}</span>
                    </div>
                    <div class="text-gray text-sm">
                        {{$show['genre']}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
