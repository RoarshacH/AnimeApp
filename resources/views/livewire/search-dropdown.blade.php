<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen=false">
    <i class="fas fa-search"></i>
    <input type="text" wire:model.debounce.500ms="search"
    class="bg-gray-800 test-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
    placeholder="Search"
    @focus="isOpen=true"
    @keydown.escape.window="isOpen=false"
    @keydown.shift.tab="isOpen=false"
    >
    @if (strlen($search) >2)
        <div class="absolute bg-gray-800 rounded w-64 mt-3 z-40"
        x-show.transition="isOpen">
            @if ($searchResults->count()> 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-gray-700 border-b text-sm">
                            <a href="{{'/Tv/'.$result['id']}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center"
                            @if ($loop->last) @keydown.tab="isOpen=false" @endif
                            >
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="Poster" class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="Poster" class="w-8">
                                @endif

                            <span class="ml-4">{{$result['name']}}</span>

                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3"> There are no resuts for "{{$search}}"</div>
            @endif
        </div>
    @endif

</div>
