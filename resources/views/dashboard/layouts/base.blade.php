<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <meta name="author" content="David Grzyb">
        <meta name="description" content="">
        @stack('editor') 
        @stack('switch')
        <!-- Tailwind -->
        <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
         
        <style>
            /* @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap'); */
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
            .font-family-roboto { font-family: 'Roboto', sans-serif; }
            .bg-sidebar { background: #2e2e2e; }
            .bg-header { background: #202020; }
            .cta-btn { color: #fff; }
            .upgrade-btn { background: #5940b5; }
            .upgrade-btn:hover { background: #0038fd; }
            .active-nav-link { background: #5940b5; }
            .nav-item:hover { background: #5940b5; }
            .account-link:hover { background: #5940b5; }
            .leading-loose p { line-height: 1.4; }
        </style>
    </head>
    <body class="bg-gray-200 font-family-roboto flex">

        @include('dashboard.includes.sidebar')

        <div class="w-full flex flex-col h-screen overflow-y-hidden">

            @include('dashboard.includes.navigation')

            <div class="w-full overflow-x-hidden flex flex-col">
                <main class="w-full flex-grow p-6">

                @yield('content')

                </main>
        
            </div>
        </div>
    
        @stack('scripts')  

    </body>
</html>