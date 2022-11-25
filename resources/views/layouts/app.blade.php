<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"> --}}
        @vite(['resources/scss/app.scss'])
        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-3 d-none d-md-inline-block" href="/">Главная</a>
            <a class="py-3 d-none d-md-inline-block" href="{{route('about')}}"> О нас</a>
            <a class="py-3 d-none d-md-inline-block" href="{{route('contact')}}">Контакты</a>
        </nav>
    </header>
    <main class="container">
        @yield('content')

    </main>

    <script src="{{asset('/js/main.js')}}"></script>
    </body>
</html>
