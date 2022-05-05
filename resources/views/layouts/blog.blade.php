<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Дмитрий Плетнев">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/prism.css') }}">
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
    <script>
        document.getElementById("showNav").addEventListener("click", function() {
            var menu = document.getElementById("menu").classList;
            if (menu.contains("hidden")) {
                menu.remove("hidden");
            } else {
                menu.add("hidden");
            }
        });
    </script>
    @stack('fade')
    <script src="{{ mix('/js/prism.js') }}"></script>
    @stack('editor')
</body>

</html>
