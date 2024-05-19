<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="{{ asset('storage/Icon.png') }}" />
        <title>SlimSlam</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-foreground antialiased">
        <div class="flex min-h-screen flex-col items-center bg-background pt-6 sm:justify-center sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="h-20 w-20 fill-current text-primary" />
                </a>
            </div>

            <div class="mt-6 w-full overflow-hidden bg-card p-6 sm:max-w-md sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
