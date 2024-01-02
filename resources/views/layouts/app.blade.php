<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SK GIVEAWAY</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Scripts -->
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}

    <style type="text/css">
        body {
            background-image:url("{{asset('storage/background.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>
</head>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
