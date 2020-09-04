<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime App</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .owl-carousel .item {
          height: 30rem;
          padding: 1rem;
        }
        </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <livewire:styles />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href=""><svg class="fill current text-gray-500 top-0 mr-2"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                      </svg>
                    </a>
                </li>
                <li class="md:ml-16 mt-1">
                <a href="{{route('movies.index')}}" class="hover:text-gray-300">Home</a>
                </li>
                <li class="md:ml-16 mt-1">
                    <a href="{{route('movies.list')}}"  class="hover:text-gray-300">Tv Series</a>
                </li>
                <li class="md:ml-16 mt-1">
                    <a href="{{route('people.index')}}"  class="hover:text-gray-300">People</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center md:mt-4 mt-2">
                <svg class="relative fill current w-4 text-gray-500 top-0 md:left-6 z-50"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <livewire:search-dropdown>
                <div wire:loading class="spinner top-0 right-0 pl-8 z-50"></div>
            </div>


        </div>
    </nav>
{{-- end of the Navigation --}}
    @yield('contents')

</body>
<livewire:scripts />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    jQuery(document).ready(function($){
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:3
          },
          1000:{
            items:5
          }
        }
      })
    })
    </script>
    @yield('scripts')
</html>
