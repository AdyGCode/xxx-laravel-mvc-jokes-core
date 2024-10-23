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
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ url('all.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-zinc-900">
        <div class="bg-zinc-100 mb-1">
            @include('layouts.navigation')
        </div>

        <div class="min-h-screen flex flex-col bg-zinc-100">
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-zinc-800 text-zinc-200">
                    <div class="container w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="container grow my-8 mx-auto py-8 shadow shadow-black/25
                         w-full px-6 bg-white overflow-hidden rounded-lg">
                {{ $slot }}
            </main>

            @include('layouts.footer')
        </div>
    </body>
</html>
