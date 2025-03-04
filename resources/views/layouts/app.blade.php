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
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
    <title>@yield('title') PAGE</title>
</head>
<body>
    <header class="">
        <nav class="py-4 flex flex-row justify-between items-center">
            <img src="logo.png" alt="logo" class="ml-4">
            <ul class="flex flex-row justify-center uppercase text-neutral-200">
                <li><a class="m-2" href="/blog">Blog</a></li>
                <li><a class="m-2" href="/staff">Staff</a></li>
                <li><a class="m-2" href="/about">About</a></li>
                <li><a class="m-2" href="/location">Location</a></li>
                <li><a class="m-2" href="/login">Login</a></li>
                <li><a class="m-2" href="/register">Register</a></li>
            </ul>
            <span>
                <i>fb i</i>
                {{-- <i>Youtube icon</i>
                <i>tiktok icon</i> --}}
            </span>
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
</body>
</html>