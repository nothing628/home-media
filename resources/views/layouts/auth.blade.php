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
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>

    <div class="h-screen bg-gradient-to-br from-[#07bf67] to-[#0cded5]" id="app">
        <div class="px-0 w-full mx-auto">
            <div class="mx-0 flex flex-wrap">
                <div
                    class="h-screen p-12 bg-white flex-shrink-0 flex-grow-0 md:basis-5/12 relative w-full md:w-5/12">
                    {{ $slot }}
                </div>
                <div class="flex-shrink-0 flex-grow-0 md:basis-7/12 relative w-full md:w-7/12">
                    <x-auth.right-decoration></x-auth.right-decoration>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
