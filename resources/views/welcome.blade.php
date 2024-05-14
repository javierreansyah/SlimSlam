<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

<<<<<<< HEAD
    <title>SlimSlam</title>
=======
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
>>>>>>> 230cd150bce31e20b177163c361c1203318a2abf

        {{-- Chart JS --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

<<<<<<< HEAD
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-background">
    <div class="relative min-h-screen flex justify-center ">
        <div class="relative w-full">
            <header class="fixed right-0 left-0 bg-card">
                @if (Route::has('login'))
                    <nav class="flex bg-transparent-60 items-center justify-between px-10 py-5">
                        <div class="flex gap-2">
                            <div class="flex gap-2 text-green-500 font-semibold cursor-pointer items-center">
                                <img class="h-10 inline items-center"
                                    src="https://seeklogo.com/images/B/bmw-logo-248C3D90E6-seeklogo.com.png">
                                <p>SlimSlam</p>
=======
    <body class="bg-background font-sans antialiased">
        @include('layouts.navigation')
        <div class="relative flex min-h-screen justify-center">
            <div class="relative w-full">
                <header class="fixed left-0 right-0 bg-black bg-opacity-45">
                    @if (Route::has('login'))
                        <nav class="bg-transparent-60 flex px-10 py-3 md:items-center md:justify-between">
                            <div class="flex gap-2">
                                <div class="flex cursor-pointer items-center gap-2 font-semibold text-green-500">
                                    <img class="inline h-10 items-center" src="https://seeklogo.com/images/B/bmw-logo-248C3D90E6-seeklogo.com.png" />
                                    <p>SlimSlam</p>
                                </div>
                                <div class="flex justify-start">
                                    <ul class="flex items-center gap-2 font-medium">
                                        <li>
                                            <a href="#" class="text-white duration-500 hover:text-primary">Home</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-white duration-500 hover:text-primary">Plan</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-white duration-500 hover:text-primary">About</a>
                                        </li>
                                    </ul>
                                </div>
>>>>>>> 230cd150bce31e20b177163c361c1203318a2abf
                            </div>

                            <div class="flex items-center gap-2">
                                <div class="flex gap-4 font-medium">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="items-center rounded-full bg-primary px-4 py-2 text-white duration-500 hover:bg-muted">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="items-center rounded-full bg-primary px-4 py-2 text-white duration-500 hover:bg-muted">Sign In</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="items-center rounded-full bg-card px-4 py-2 text-white duration-500 hover:bg-muted">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </nav>
                    @endif
                </header>

                <main>
                    <div>
                        <img src="storage/home/home-bg.jpg" alt="" />
                    </div>
                </main>

<<<<<<< HEAD
            <main>
                <div>
                    <img class="bg-opacity-45" src="storage/home/home-bg.jpg" alt="">
                </div>
            </main>

            <footer class="bg-black">
                Footer
            </footer>
=======
                <footer class="bg-black">Footer</footer>
            </div>
>>>>>>> 230cd150bce31e20b177163c361c1203318a2abf
        </div>
    </body>
</html>
