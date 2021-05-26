<nav class="site-nav flex justify-center py-4 sm:flex-row items-center flex-col relative md:py-2 bg-dark">						
    <a class="hidden md:block" href="/">
        <img class="site-avatar mr-4 w-12 h-12 border-4 rounded-full border-dark-lighter hover:border-primary transition duration-500 ease-in-out" src="{{ asset('/assets/images/logo.jpg') }}">
    </a>
    <h1 class="hidden md:block site-title font-bold text-4xl uppercase tracking-widest">
        @if ($site_name)
            <a class="text-primary dark:text-primary hover:text-light-gray" href="/">{{ $site_name }}</a>
        @else 
            <a class="text-primary dark:text-primary hover:text-light-gray" href="/">alvar</a>
        @endif
    </h1>
    <div class="site-nav-content flex justify-center items-center mx-16">
        <ul class="flex flex-wrap list-none flex-col sm:flex-row items-center">
            @foreach ($categories as $category)
                <li class="mx-5 my-1 sm:my-0">
                    <a class="relative py-1 border-b-2 uppercase text-light dark:text-light hover:text-primary dark:hover:text-primary border-dark hover:border-primary" id="{{ $category['id'] }}" href="{{route('getPostsByCategory', $category['slug'])}}">{{ $category['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <label id="switch" class="switch">
        <input type="checkbox" id="switchTheme">
        <span class="slider round"></span>
    </label>
    
    <script>
        var elem = document.getElementById('switchTheme')
        if (localStorage.theme === 'dark') {
            elem.checked = true
        } else {
            elem.checked = false
        }
    </script>

    {{-- <button id="switchTheme" class="w-10 h-10 text-gray hover:text-primary flex items-center justify-center focus:outline-none ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
        </svg>
    </button> --}}
    @guest
        <a class="block ml-16 text-light hover:text-primary" href="{{ url('/login') }}" title="Войти">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
        </a> 
    @else
        <span class="ml-16 text-sm inline-flex text-light">
            Привет, {{ $user->name }}
        </span>
        <a href="{{ route('logout') }}" class="block ml-1 text-light dark:text-light hover:text-primary dark:hover:text-primary" title="Выйти"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>    
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> 
    @endguest					
</nav>