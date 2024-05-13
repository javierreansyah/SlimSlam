<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    {{-- Chart JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-background">
    <div class="relative min-h-screen flex justify-center ">
        <div class="relative w-full">
            <header class="fixed right-0 left-0 bg-black bg-opacity-45">
                @if (Route::has('login'))
                    <nav class="flex bg-transparent-60 md:items-center md:justify-between px-10 py-3">
                        <div class="flex gap-2">
                            <div class="flex gap-2 text-green-500 font-semibold cursor-pointer items-center">
                                <img class="h-10 inline items-center"
                                    src="https://seeklogo.com/images/B/bmw-logo-248C3D90E6-seeklogo.com.png">
                                <p>SlimSlam</p>
                            </div>
                            <div class="flex justify-start">
                                <ul class="flex gap-2 items-center font-medium">
                                    <li>
                                        <a href="#" class="hover:text-primary text-white duration-500">Home</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:text-primary text-white duration-500">Plan</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="hover:text-primary text-white duration-500">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex gap-2 items-center">
                            <div class="flex font-medium gap-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="bg-primary items-center text-white hover:bg-muted px-4 py-2 rounded-full duration-500">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="bg-primary items-center text-white hover:bg-muted px-4 py-2 rounded-full duration-500">
                                        Sign In
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="items-center bg-card hover:bg-muted text-white px-4 py-2 rounded-full duration-500">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        </div>


                    </nav>
                    {{-- @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-muted-foreground text-foreground bg-green-500">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-muted-foreground text-foreground">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-muted-foreground text-foreground">
                                    Register
                                </a>
                            @endif
                        @endauth --}}
                @endif
            </header>

            <main>
                <div>
                    <img src="storage/home/home-bg.jpg" alt="">
                </div>
            </main>

            <footer class="bg-black">
                Footer
            </footer>
        </div>
    </div>
</body>

</html>
