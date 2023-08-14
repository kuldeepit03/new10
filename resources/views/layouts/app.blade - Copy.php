<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'New-10') }}</title>
        <link rel="shortcut icon" href="{{asset('img/favicon/favicon.ico')}}">
        <link href="{{asset('vendor/fonts/boxicons.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/css/core.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/css/theme-default.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/demo.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('/vendor/libs/apex-charts/apex-charts.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <script src="{{asset('vendor/js/helpers.js')}}"></script>
        <script src="{{asset('js/config.js')}}"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!--<div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>-->
    </body>
    <script src="{{asset('vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/js/menu.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</html>
