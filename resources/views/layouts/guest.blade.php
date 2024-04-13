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
        <div class="min-h-screen  flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-purple-200 to-indigo-900 transform  dark:bg-gray-900">
            <div class=" w-[7rem] h-[7rem] bg-[url('\public\images\Mask group.png')] bg-contain bg-no-repeat ">
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <img src="/images/SeAn.png" class="w-full h-full" alt="">
                </a>
            </div>

            <div class="w-full sm:max-w-xl mt-6 px-6 py-12 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>