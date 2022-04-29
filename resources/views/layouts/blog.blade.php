<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Дмитрий Плетнев">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ mix('css/prism.css') }}">
    <script>
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark')
            localStorage.theme = 'dark';
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.removeItem('theme');
        }
    </script>
    @stack('recaptcha')
</head>

<body class="bg-light text-black font-sans dark:bg-dark-lighter dark:text-gray">
    <a href="#" onclick="return false" class="menu_link"><span></span></a>

    @include('includes.navigation')

    <div class="container mx-auto">

        @yield('content')

    </div>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ mix('/js/scripts.js') }}"></script>
    <script>
        document.getElementById('showNav').addEventListener('click', function() {

            var menu = document.getElementById('menu').classList;

            if (menu.contains('hidden')) {

                menu.remove('hidden');

            } else {

                menu.add('hidden');

            }

        });
    </script>
    @stack('fade')
    <script src="{{ mix('/js/prism.js') }}"></script>
    @stack('editor')
</body>

</html>
