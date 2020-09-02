@extends('layouts.main')

@section('contents')
    <div class="anime-info border-b border-gray-500">
        <div class="container mx-auto px-4 py-16 flex">
            <img src={{'https://image.tmdb.org/t/p/w500/'.$details['poster_path']}} alt="The Tv Show Poster" class="w-64 lg:w-96">
            <div class="ml-16">
                <h2 class="text-4xl font-semibold">
                    {{$details['name']}}
                </h2>
                <div class="flex items-center text-gray-400 test-sm">
                    <span class="ml-1">{{$details['vote_average']}} </span>
                    <span class="mx2">|</span>
                    <span> {{$details['first_air_date']}}</span>
                </div>
                <div class="text-gray text-sm">
                    @foreach ($details['genres'] as $item)
                        {{$item['name']}}  @if (!$loop->last)
                        ,
                    @endif
                    @endforeach
                </div>

                <p class="test-gray mt-8">
                    {{$details['overview']}}
                </p>
                <div class="mt-12">
                    <h2 class="font-semibold text-white">
                        Production
                    </h2>
                    <div class="flex mt-4">

                            @foreach ($details['credits']['crew'] as $item)
                                @if ($loop->index < 2)
                                    <div class="mr-8">
                                        <div>{{$item['name']}}</div>
                                        <div class="text-sm text-gray-400">
                                            {{$item['job']}}
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                    </div>
                </div>
                @if (count($details['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{$details['videos']['results'][0]['key']}}"
                        class="flex inline-flex items-center bg-orange-900 px-5 py-4 font-semibold text-gray-900 rounded hover:bg-orange-600
                            transition ease-in-out duration-150">
                            Watch Online
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{-- end of the anime details section --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="owl-carousel owl-theme mt-5">
                @foreach ($details['credits']['cast'] as $item)
                    <div class="item">
                        <div class="mt-8">
                            <img src={{'https://image.tmdb.org/t/p/w300/'.$item['profile_path']}} alt="">
                            <div class="mt-2">
                            <a href="" class="text-lg mt-2 hover:text-gray:300">{{$item['name']}}</a>
                                <div class="text-sm text-gray-400">{{$item['character']}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>
    {{-- owl corosal --}}
    </div>

@endsection
