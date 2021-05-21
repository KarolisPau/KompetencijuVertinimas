<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="shadow bg-yellow-200" >
                <div class="max-w-7xl mx-auto py-6 px-4">
                    {{ $header ?? ''}}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footeris -->
            <footer class="shadow bg-blue-200 absolute bottom-0 w-full">
                <p class="text-white text-center text-lg shadow-md">Remėjai: </p>
                <div class="pt-6 px-4 flex justify-center">
                    <x-remeju-logo></x-remeju-logo>
                    <x-remeju-logo2></x-remeju-logo>
                    <x-remeju-logo3></x-remeju-logo>                        
                </div>
                <p class="text-white text-center text-lg">Karolis Paulauskas 13gr. 2021-05-21</p>
            </footer>
        </div>
    </body>
</html>
