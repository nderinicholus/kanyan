<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="relative">

        <header class="fixed w-full py-4 px-5 z-10 bg-red-900">
            <nav class="flex justify-between items-center max-container sticky top-0">
                <a href="#" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>

                <ul class="flex-1 flex justify-center items-center gap-16 max-lg:hidden text-white ">
                    <li class="hover:text-gray-800"><a href="">Home</a></li>
                    <li class="hover:text-gray-800"><a href="">About us</a></li>
                    <li class="hover:text-gray-800"><a href="">Products</a></li>
                    <li class="hover:text-gray-800"><a href="">Contact us</a></li>
                    <li class="bg-slate-500 px-4 py-1 rounded-3xl border-0 items-center justify-center shadow-black"><a
                            href="/login">Log in </a></li>
                </ul>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="hidden items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg max-lg:block hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </nav>
        </header>


        {{-- Carousel --}}
        <div
  id="carouselExampleCrossfade"
  class="relative"
  data-te-carousel-init
  data-te-ride="carousel">
  <!--Carousel indicators-->
  <div
    class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-te-carousel-indicators>
    <button
      type="button"
      data-te-target="#carouselExampleCrossfade"
      data-te-slide-to="0"
      data-te-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-te-target="#carouselExampleCrossfade"
      data-te-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-te-target="#carouselExampleCrossfade"
      data-te-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>

  <!--Carousel items-->
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    <div
      class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-fade
      data-te-carousel-item
      data-te-carousel-active>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
        class="block w-full"
        alt="Wild Landscape" />
    </div>
    <!--Second item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-fade
      data-te-carousel-item>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
        class="block w-full"
        alt="Camera" />
    </div>
    <!--Third item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-fade
      data-te-carousel-item>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
        class="block w-full"
        alt="Exotic Fruits" />
    </div>
  </div>

  <!--Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleCrossfade"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleCrossfade"
    data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>
        {{-- Carousel --}}

        {{-- About us --}}
        <div class="flex flex-row gap-5 max-lg:flex-col items-center">
            <div class="w-1/2 max-lg:w-full">
                <img src="{{ asset('images/about.jpg') }}" alt="" class="w-full">
            </div>
            <div class="w-1/2 max-lg:w-full p-5">
                <h3 class="text-red-800 vibes text-2xl font-semibold">A few words about our farm</h3>
                <h2 class="text-5xl uppercase my-4 font-bold">About us</h2>
                <p class="justify-end">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti consequuntur mollitia culpa, quos
                    doloribus esse, fuga amet debitis pariatur illum repellat praesentium, fugiat quo optio nostrum
                    asperiores incidunt dignissimos aut.
                </p>

                <div class="mt-5">
                    <a href="#"
                        class="bg-red-900 px-3 py-2 text-white rounded hover:bg-white hover:border-2 hover:border-red-900 hover:text-red-900 ">Read
                        more</a>
                </div>
            </div>
        </div>
        {{-- About us --}}

        {{-- Pleadge --}}
        <div class="flex flex-row gap-5 justify-center px-5 bg-slate-500 mt-5 max-lg:flex-col">
            <div class=" w-1/4 p-4 text-white max-lg:w-full">
                <h1 class="text-5xl opacity-20">01</h1>
                <h3 class="uppercase text-xl font-semibold mb-2 text-white">Always fresh</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, voluptatum at corporis nam
                    blanditiis vel, sequi facere voluptate placeat sint distinctio, et consequuntur. Commodi nisi vitae
                    voluptate. Dicta, cumque mollitia?</p>
            </div>
            <div class="w-1/4 p-4 text-white max-lg:w-full">
                <h1 class="text-5xl opacity-20">02</h1>
                <h3 class="uppercase text-xl font-semibold mb-2 text-white">100% Organic</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, voluptatum at corporis nam
                    blanditiis vel, sequi facere voluptate placeat sint distinctio, et consequuntur. Commodi nisi vitae
                    voluptate. Dicta, cumque mollitia?</p>
            </div>
            <div class="w-1/4 p-4 text-white max-lg:w-full">
                <h1 class="text-5xl opacity-20">03</h1>
                <h3 class="uppercase text-xl font-semibold mb-2 text-white">No Additives</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, voluptatum at corporis nam
                    blanditiis vel, sequi facere voluptate placeat sint distinctio, et consequuntur. Commodi nisi vitae
                    voluptate. Dicta, cumque mollitia?</p>
            </div>
            <div class="w-1/4 p-4 text-white max-lg:w-full">
                <h1 class="text-5xl opacity-20">04</h1>
                <h3 class="uppercase text-xl font-semibold mb-2">Modern Farm</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, voluptatum at corporis nam
                    blanditiis vel, sequi facere voluptate placeat sint distinctio, et consequuntur. Commodi nisi vitae
                    voluptate. Dicta, cumque mollitia?</p>
            </div>
        </div>
        {{-- Pleadge --}}


        {{--  Products --}}
        <div class="container">
            <h1 class="text-center my-10 text-5xl uppercase font-semibold vibes text-red-900">Our Products</h1>
            <div class="flex flex-row justify-center items-center px-5 mt-10 mb-10 gap-1 max-sm:flex-col">

                <div class="w-1/3 max-sm:w-full max-sm:py-10">

                    <div class="overflow-hidden pb-5">
                        <img class="hover:scale-150 transition-all mb-5" src="{{ asset('images/about.jpg') }}"
                            alt="">
                    </div>
                    <h3 class="flex justify-center text-red-900 uppercase border-t-2 border-t-slate-300 pt-2 font-semibold  hover:text-slate-500  items-center">Lorem ipsum dolor sit
                        amet.</h3>
                </div>

                <div class="w-1/3 max-sm:w-full max-sm:py-10">

                    <div class="overflow-hidden pb-5">
                        <img class="hover:scale-150 transition-all mb-5" src="{{ asset('images/about.jpg') }}"
                            alt="">
                    </div>
                    <h3 class="flex justify-center text-red-900 uppercase border-t-2 border-t-slate-300 pt-2 font-semibold  hover:text-slate-500  items-center">Lorem ipsum dolor sit
                        amet.</h3>

                </div>

                <div class="w-1/3 max-sm:w-full max-sm:py-10">
                    <div class="overflow-hidden pb-5">
                        <img class="hover:scale-150 transition-all mb-5" src="{{ asset('images/about.jpg') }}"
                            alt="">
                    </div>
                    <h3 class="flex justify-center text-red-900 uppercase border-t-2 border-t-slate-300 pt-2 font-semibold  hover:text-slate-500  items-center">Lorem ipsum dolor sit
                        amet.</h3>
                </div>
            </div>
        </div>
        {{--  Products --}}

        {{-- Contacts --}}
        <div class="container">
            <div class="flex flex-row justify-center bg-slate-300 px-10 py-10 gap-5 max-sm:flex-col">

                <div class="w-1/3 max-md:w-full max-sm:py-0">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <div class="pt-4">
                        <p>Mon - Fri: 8am to 5pm,</p>
                        <p>Sat: 9am to 1pm</p>
                    </div>

                </div>

                <div class="w-1/3 max-md:w-full max-sm:py-0">
                    <h3 class="uppercase font-semibold text-lg">Contacts</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <p>Phone: Lorem ipsum dolor sit amet.</p>
                    <p>Email: info@kanyanaberdarecheese.com.</p>
                </div>

                <div class="w-1/3 max-md:w-full max-sm:py-0">
                    <h3 class="uppercase font-semibold text-lg">Social Media</h3>
                    <p>Facebook: ipsum dolor sit amet consectetur adipisicing.</p>
                    <p>Instagram: Lorem ipsum dolor sit amet. </p>
                </div>
            </div>
        </div>
        {{-- Contacts --}}

        {{-- Footer --}}
        <div class="container">
            <div class="flex justify-center items-center bg-red-900 py-3">
                <div class="copyright text-white text-sm"> @php echo 'Kanyan ' . '@'  . date('Y') . ' All rights reserved' @endphp
                </div>
            </div>
        </div>
        {{-- Footer --}}




    </div>

</body>

</html>
