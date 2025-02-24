<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
    <title>@yield('title') PAGE</title>
</head>
<body>
    <header class="bg-yellow-800">
        <nav class="py-4 flex flex-row justify-between items-center">
            <img src="logo.png" alt="logo" class="ml-4">
            <ul class="flex flex-row justify-center uppercase text-neutral-200">
                <li><a class="m-2" href="/blog">Blog</a></li>
                <li><a class="m-2" href="/about">About</a></li>
                <li><a class="m-2" href="/staff">Staff</a></li>
                <li><a class="m-2" href="/location">Location</a></li>
                <li><a class="m-2" href="/login">Login</a></li>
                <li><a class="m-2" href="/register">Register</a></li>
            </ul>
            <span>
                <i>facebook icon</i>
                {{-- <i>Youtube icon</i>
                <i>tiktok icon</i> --}}
            </span>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-yellow-800">
        {{-- Segment this into rows and columns that merge when reduced to phone view --}}
        <h4>Acumen College</h4>
        <p>P.O box 2375. <br />Oke-Ayo Road, 4 Peace Avenue, Magboro, Nigeria. <br />(+234) 80 346-89-023. <br />acumenschools2009@gmail.com</p>

        <h4>Navigation</h4>
        <p>Admission <br /> Academics <br /> Student Life <br /> Resource Library <br /> About Us</p>
        
        <h4>Resources</h4>
        <p>Blog <br /> News <br /> School Profile <br /> School Resources</p>

        <h4>Social</h4>
        <p>Follow us on <br /> Twitter <br /> Youtube <br /> Instagram <br /> Facebook</p>
    </footer>
</body>
</html>