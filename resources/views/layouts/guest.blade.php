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
    <div class="grid grid-cols-12 gap-4">
        <!-- 8-column section -->
        <div
            class="overflow-hidden relative col-span-12 md:col-span-8 bg-gradient-to-b from-blue-500 to-blue-900 p-4  flex justify-center items-center">
            <div class="content-center items-center pr-6 mr-48">
                <h1 class="text-white text-5xl pr-6 mr-6" style="font-weight: 900">Stomatologiya</h1>
                <p class="text-white text-xl pt-3">Platformasiga Xush kelibsiz!</p>
            </div>
            <svg class="absolute top-96 right-96 w-full h-full" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 400 400">
                <!-- Large Circle -->
                <circle cx="180" cy="180" r="150" stroke="rgba(255, 255, 255, 0.2)" stroke-width="1"
                    fill="none" />
                <!-- Medium Circle -->
                <circle cx="220" cy="200" r="150" stroke="rgba(255, 255, 255, 0.2)" stroke-width="1"
                    fill="none" />

            </svg>
        </div>

        <!-- 4-column section -->
        <div class="col-span-12 md:col-span-4">
            <div class="min-h-screen flex flex-col sm:justify-center items-center p-6 sm:pt-0">
                <div class="w-full sm:max-w-md p-6 bg-white overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</body>

</html>
