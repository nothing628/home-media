<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="" id="app">
        <x-header></x-header>
        <div>
            <x-sidebar></x-sidebar>
            <x-content></x-content>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
