<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="KelenS">

    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="@yield('type', 'site professionnel')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/favicon.webp') }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:site_name" content="Sean Segura">
    @stack('meta')

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>@yield('title') | Sean Segura</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/Logo.webp') }}">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" defer>

    {{-- Page level scripts --}}
    @stack('scripts')

    {{-- Scripts --}}
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" defer></script>
    <script src="{{ asset('assets/vendor/axios/axios.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/css-vars-ponyfill.min.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-confirm="delete"]').on('click', function (e) {
                e.preventDefault();
                $('#confirmDeleteForm').attr('action', $(this).attr('href'));
                $('#confirmDeleteModal').modal('show');
            });
            cssVars({});
        });
    </script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme_button.js') }}" defer></script>
    <script src="{{ asset('assets/js/button.js') }}" defer></script>
    <script src="{{ asset('assets/js/navbar.js') }}" defer></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>

    {{-- Styles --}}
    <link href="{{ asset('assets/css/scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/widgets.css') }}" rel="stylesheet">
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

    <main>
        @yield('content')
    </main>

    <footer class="footer @if(Route::is('contact.index', 'a-propos')) fixed-footer @endif">
        @include('elements.footer')
    </footer>
</div>

@stack('footer-scripts')

</body>

</html>
