@extends('layouts.main')

@section('contents')
    <div class="anime-info border-b border-gray-500">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="" alt="the anime image" class="w-94">
            <div class="ml-16">
                <h2 class="text-4xl font-semibold">
                    Anime Name
                </h2>
                <div class="flex items-center text-gray-400 test-sm">
                    <span class="ml-1"></span>
                    <span class="mx2">|</span>
                </div>
                <p class="test-gray mt-8">

                </p>
                <div class="mt-12">
                    <h2 class="font-semibold text-white">
                        Cast
                    </h2>
                    <div class="mt4">
                        <div>
                            <div>Directer</div>
                            <div class="text-sm text-gray-400">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-900 px-5 py-4 font-semibold text-gray-900 rounded hover:bg-orange-600
                    transition ease-in-out duration-150">
                        Watch Online
                    </button>
                </div>
            </div>

        </div>

    </div>

    {{-- end of the anime details section --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
        </div>
    {{-- owl corosal --}}
    </div>

@endsection
