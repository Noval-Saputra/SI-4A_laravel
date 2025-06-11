<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; padding-top: 1.5rem; background: linear-gradient(180deg, #b91c1c 0%, #1e3a8a 100%);">
            <div>
                <a href="/">
                    <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                     <img src="{{ asset('images/logo.png') }}" alt="logo Plunderer" class="w-40">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4" style="background: rgba(129, 140, 248, 0.85); box-shadow: 0 4px 24px rgba(0,0,0,0.10); border-radius: 0.75rem;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
