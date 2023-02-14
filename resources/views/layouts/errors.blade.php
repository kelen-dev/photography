<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="KelenS">

        <meta property="og:title" content="@yield('title')">
        <meta property="og:type" content="@yield('type', 'website')">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('assets/img/favicon.png') }}">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:site_name" content="Sean Segura">
        @stack('meta')

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | Sean Segura</title>

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"
              integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>

        {{-- Page level scripts --}}
        @stack('scripts')

        {{-- Scripts --}}
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
        <script src="{{ asset('public/assets/vendor/axios/axios.min.js') }}" defer></script>
        <script src="{{ asset('public/assets/js/css-vars-ponyfill.min.js') }}" defer></script>
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
        <script src="{{ asset('public/assets/js/script.js') }}" defer></script>
        <script src="{{ asset('public/assets/js/app.js') }}" defer></script>

        {{-- Bootstrap --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
                integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
                integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg=="
                crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
              integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap-grid.min.css"
              integrity="sha512-q0LpKnEKG/pAf1qi1SAyX0lCNnrlJDjAvsyaygu07x8OF4CEOpQhBnYiFW6YDUnOOcyAEiEYlV4S9vEc6akTEw=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap-reboot.min.css"
              integrity="sha512-stCMej6DXfErBwD8bQrJsG2dFPHNW9y8cmccQhW0o+GeSxKzjABmIVdwOzQ5Vlw4HYoEwrECGDRQs8xF0f9ssg=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap-utilities.min.css"
              integrity="sha512-kRvJclW5GazdbAJPE9vvs560XNBwTBGLg4RVHZALXHFnAWQeRbQ/jGcGDHcQXiiqRld4wEFs6Kpoa6Tm/wCrtg=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>

        {{-- Styles --}}
        <link href="{{ asset('assets/css/scrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/player.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/widgets.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet">
        @stack('styles')
    </head>

    <body style="height: 100vh; overflow:hidden;">

        {{-- Page --}}
        <div id="app">

            <main>
                @yield('content')
            </main>

        </div>

        @stack('footer-scripts')

    </body>

</html>
