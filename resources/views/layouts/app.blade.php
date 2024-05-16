<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuXFymO8BOBat3VO0PFlx6dJ6TTch_F-sSD-RdCUlWHw&s') }}">
        <title>{{ config('app.name', 'SlimSlam') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-background">
            @include('layouts.navigation')
            <div class="h-16"></div>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-background shadow">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="bg-ba">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
