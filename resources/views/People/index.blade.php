@extends('layouts.main')


@section('contents')
<div class="container mx-auto px-4 py-16">
    <div class="popular-anime">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Popular Actors
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($people as $person)
                <div class="mt-8 actor">
                    <a href="{{route('people.show', $person['id'])}}"> <img src="{{ $person['profile_path']}}" alt=""
                        class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                    <a href="{{route('people.show', $person['id'])}}" class="text-lg hover:text-gray-300"> {{$person['name']}}</a>
                        <div class="text-sm truncate text-gray-400"> {{$person['known_for']}} </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="page-load-status my-8">
        <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
        {{-- <p class="infinite-scroll-request">Loading...</p> --}}
        <p class="infinite-scroll-last">End of content</p>
        <p class="infinite-scroll-error">Error</p>
      </div>

    <div class="flex justify-between mt-16">
        @if ($previous)
        <a href="/people/page/{{$previous}}">Previus</a>
        @else
            <div></div>
        @endif


        @if ($next)
        <a href="/people/page/{{$next}}">Next</a>
        @else
            <div></div>
        @endif
    </div>
</div>


@endsection


@section('scripts')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
    // options
    path: '/people/page/@{{#}}',
    append: '.actor',
    status: '.page-load-status',
    // history: false,
    });

    // element argument can be a selector string
    //   for an individual element
    var infScroll = new InfiniteScroll( '.container', {
    // options
    });
</script>

@endsection


