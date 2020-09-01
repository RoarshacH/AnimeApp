@extends('layouts.main')


@section('contents')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-anime">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Current Season
        </h2>
        <div class="owl-carousel owl-theme mt-5">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
        </div>
        {{-- @if ()
            @foreach ($collection as $item)
                <div class="grid grid-cols-4 gap-16">
                    <div class="mt-8">
                        <a href=""> <img src="" alt=""> </a>
                    </div>
                </div>
            @endforeach
        @endif --}}
    </div>
</div>

<div class="container mx-auto px-4 pt-16">
    <div class="popular-anime">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Top Anime
        </h2>
        <div class="owl-carousel owl-theme mt-5">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
        </div>
    </div>
</div>

@endsection
