<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>

    <div class="" id="app">
        <x-header></x-header>
        <div class="flex">
            <x-sidebar></x-sidebar>
            <x-content>
                @if(isset($slot))
                {{ $slot }}
                @endif

                @yield('content')
            </x-content>
        </div>
    </div>
</body>

</html>
