<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Nixie+One&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <title>@yield('title') PAGE</title>
</head>
<body>
    <header class="">
        <nav class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 absolute">
            <div>
                <a href="#" class="">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="ml-4 w-12">
                </a>
            </div>

            <svg
                xmlns="http://www.w3.org/2000/svg"
                id="menu-button"
                class="h-9 w-9 cursor-pointer md:hidden block"
                fill="none"
                viewBox="0 0 24 24"
                stroke="#fff"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class="pt-4 text-base text-neutral-200 md:flex md:justify-between uppercase">
                    <li><a class="m-2" href="/blog">Blog</a></li>
                    <li><a class="m-2" href="/staff">Staff</a></li>
                    <li><a class="m-2" href="/about">About</a></li>
                    <li><a class="m-2" href="/location">Location</a></li>
                    <li><a class="m-2" href="/login">Login</a></li>
                    <li><a class="m-2" href="/register">Register</a></li>
                </ul>
            </div>

            {{-- <div class="md:opacity-0 hidden">
                <a href="#">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="ml-4 w-12">
                </a>
            </div> --}}
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-yellow-800 flex sm:flex-row flex-col justify-between xl:px-64 px-16 py-8">
        {{-- Segment this into rows and columns that merge when reduced to phone view --}}
        <div class="w-48 mb-4">
            <h4 class="font-bold my-2">Acumen College</h4>
            <p class="md:text-sm text-xs">P.O box 2375. <br />Oke-Ayo Road, 4 Peace Avenue, Magboro, Nigeria. <br />(+234) 80 346-89-023. <br />acumenschools2009@gmail.com</p>
        </div>

        <div class="mb-4">
            <h4 class="font-bold my-2">Navigation</h4>
            <p class="md:text-sm text-xs">Admission <br /> Academics <br /> Student Life <br /> Resource Library <br /> About Us</p>
        </div>
        
        <div class="mb-4">
            <h4 class="font-bold my-2">Resources</h4>
            <p class="md:text-sm text-xs">Blog <br /> News <br /> School Profile <br /> School Resources</p>
        </div>
        
        <div class="mb-4">
            <h4 class="font-bold my-2">Social</h4>
            <p class="md:text-sm text-xs">Follow us on:</p>
            <ul class="md:text-sm text-xs">
                <li>Twitter</li>
                <li>Youtube</li>
                <li>Instagram</li>
                <li>Facebook</li>
            </ul>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>