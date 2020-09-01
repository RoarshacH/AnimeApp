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
          height: 12rem;
          background: #4DC7A0;
          padding: 1rem;
        }
        .owl-carousel .item h4 {
          color: #FFF;
          font-weight: 400;
          margin-top: 0rem;
         }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>

</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href=""><i class="fas fa-skull"></i></a>
                </li>
                <li class="md:ml-16 mt-1">
                    <a href="#" class="hover:text-gray-300">Home</a>
                </li>
                <li class="md:ml-16 mt-1">
                    <a href="#"  class="hover:text-gray-300">Movie</a>
                </li>
                <li class="md:ml-16 mt-1">
                    <a href="#"  class="hover:text-gray-300">Tv Series</a>
                </li>
                <li class="md:ml-16 mt-1">
                    <a href="#"  class="hover:text-gray-300">People</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center md:mt-4 mt-2">
                <div class="relative">
                    <i class="fas fa-search"></i>
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none
                    focus:shadow-outline" placeholder="Search">
                    {{-- <div class="absolulte top-0 ">
                        <i class="fas fa-search fill-current text-gray-500 w-4 mt-2 ml-2"></i>
                    </div> --}}

                </div>

            </div>

        </div>
    </nav>
{{-- end of the Navigation --}}
    @yield('contents')

</body>
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
</html>
