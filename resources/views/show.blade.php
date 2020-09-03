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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
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
                <div x-data="{ isOpen:false }">
                    @if (count($details['videos']['results']) > 0)
                        <div class="mt-12">
                            <button
                                @click="isOpen=true"

                                class="flex inline-flex items-center bg-orange-900 px-5 py-4 font-semibold text-gray-900 rounded hover:bg-orange-600
                                transition ease-in-out duration-150">
                                <svg class="fill text-white-500 w-6 mr-2"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Watch Online
                            </button>
                        </div>
                    @endif
                        <div x-show="isOpen"
                            style="background-color: rgba(0, 0, 0, .5);"
                            class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto z-50"
                        >
                            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                <div class="bg-gray-900 rounded">
                                    <div class="flex justify-end pr-4 pt-2">
                                        <button
                                            @click="isOpen = false"
                                            @keydown.escape.window="isOpen = false"
                                            class="text-3xl leading-none hover:text-gray-300">&times;
                                        </button>
                                    </div>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                            <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/{{ $details['videos']['results'][0]['key'] }}" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{-- <div style="background-color:rgba(0,0,0,0.5);"
                    class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                    x-show="isOpen"
                    >
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen=false"
                                    class="text-3xl leading-none hover:text-gray-300">&times</button>
                                    <div class="modal-body px-8 py-8">
                                        <div class="responsive-container overflow-hidden relative"
                                        style="padding-top:56.25%">
                                        <iframe width="560" height="315"
                                        class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                        src="https://www.youtube.com/embed/{{$details['videos']['results'][0]['key']}}"
                                        style="border:0;"
                                        allowfullscreen allow="autoplay; encrypted-media"
                                        frameborder="0"></iframe>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- end of modal --}}
                </div>
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
