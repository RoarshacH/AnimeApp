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
                        <img src={{'https://image.tmdb.org/t/p/w500/'.$show['poster_path']}} alt="The Tv Show Poster">
                    </a>
                </div>
                <div class="mt-2">
                <a href="" class="text-lg mt-2 hover-text-gray:300"> {{$show['name']}}</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">{{$show['vote_average']}}</span>
                        <span class="ml2"> | </span>
                    <span> {{$show['first_air_date']}}</span>
                    </div>
                    <div class="text-gray text-sm">
                        @foreach ($show['genre_ids'] as $item)
                            {{$genres->get($item)}} @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
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
            @foreach ($topRatedTv as $show)
            <div class="item">
                <div class="mt-8">
                    <a href="{{'Tv/'. $show['id']}}">
                        <img src={{'https://image.tmdb.org/t/p/w500/'.$show['poster_path']}} alt="The Tv Show Poster">
                    </a>
                </div>
                <div class="mt-2">
                <a href="" class="text-lg mt-2 hover-text-gray:300"> {{$show['name']}}</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                    <span class="ml-1">{{$show['vote_average']}}</span>
                        <span class="ml2"> | </span>
                    <span> {{$show['first_air_date']}}</span>
                    </div>
                    <div class="text-gray text-sm">
                        @foreach ($show['genre_ids'] as $item)
                            {{$genres->get($item)}} @if (!$loop->last)
                            ,
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
