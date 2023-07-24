<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="sr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="KelenS">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'portfolio')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/favicon.webp') }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="Photography by Sean Segura">
    @stack('meta')

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>@yield('title') | Photography by Sean Segura</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.webp') }}">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">

    {{-- Page level scripts --}}
    @stack('scripts')

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" defer></script>
    <script src="{{ asset('assets/vendor/axios/axios.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/css-vars-ponyfill.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/button.js') }}" defer></script>
    <script src="{{ asset('assets/js/home_img.js') }}" defer></script>
    <script src="{{ asset('assets/js/discord-widget.js') }}" defer></script>

    {{-- Bootstrap --}}
    <link href="https://unpkg.com/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    {{-- Styles --}}
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>

{{-- Back to top button --}}
<div id="button">
    <p>Haut de la page <i class="bi bi-arrow-right-short"></i></p>
</div>

{{-- Page --}}
<div id="app">

    <header class="header">
        @include('elements.navbar')
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer @if(Route::is('contact.index', 'mentions-legales')) fixed-footer @endif">
        @include('elements.footer')
    </footer>
</div>

@stack('footer-scripts')

</body>

</html>
