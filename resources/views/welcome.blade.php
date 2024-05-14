<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

    {{-- Chart JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background font-sans antialiased">
    <div class="relative flex min-h-screen justify-center">
        <div class="relative w-full">
            <header class="fixed left-0 right-0 bg-black bg-opacity-45">
                @include('layouts.navigation')
            </header>
            <main class="pt-16">
                <div class="flex h-screen bg-cover bg-center" style="background-image: url('storage/home/2.jpg');">
                    {{-- <img class="h-20" src="{{ asset('/storage/SlimSlam.png') }}" alt="SlimSlam" />
                    <div class="flex flex-col p-10 text-6xl text-bold">
                        <h1 class="text-white">Stronger <span class="text-primary">Body</span></h1>
                        <h1 class="text-white">Stronger <span class="text-primary">Mind</span></h1>
                        <h1 class="text-white">Stronger <span class="text-primary">You</span></h1>
                        <h2 class="text-white">Stronger <span class="text-red-500">Together</span></h2>
                    </div>
                    <div>
                        <img class="h-80" src="storage/home/model.png" alt="Model">
                    </div> --}}
                </div>
            </main>
            <footer class="bg-black text-white flex flex-col justify-between items-center p-3 text-sm">
                <div class="flex flex-col space-y-2 text-center sm:flex-row sm:space-x-4">
                  <p>© 2024 SlimSlam</p>
                </div>
                <div class="py-2 sm:mt-0 flex justify-center">
                  <a href="/">
                    <img class="h-6" src="{{ asset('/storage/SlimSlam.png') }}" alt="SlimSlam" />
                  </a>
                </div>
              </footer>
              
              
              
        </div>
    </div>
</body>


</html>
