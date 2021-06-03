<nav class="site-nav">						
    <a class="hidden md:block" href="/">
        <img class="site-avatar " src="{{ asset('/assets/images/logo.jpg') }}">
    </a>
    <h1 class="hidden md:block site-title font-bold text-4xl uppercase tracking-widest">
        @if ($site_name)
            <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">{{ $site_name }}</a>
        @else 
            <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray" href="/">alvar</a>
        @endif
    </h1>
    <div class="site-nav-content flex justify-center items-center mx-16">
        <ul class="flex flex-wrap list-none flex-col sm:flex-row items-center">
            <li class="mx-5 my-1 sm:my-0">
                <a class="relative py-1 border-b-2 uppercase text-black dark:text-light hover:text-primary dark:hover:text-primary-darker border-light-gray dark:border-dark hover:border-primary dark:hover:border-primary-darker" href="{{ url('/blog') }}">Главная</a>
            </li>
        </ul>
    </div>

    @include('includes.switcher')
    

   @auth
        <span class="ml-16 text-sm inline-flex text-black dark:text-light">
            {{ $user->name }}
        </span>
        <a href="{{ route('logout') }}" class="block ml-1 text-black dark:text-light hover:text-primary dark:hover:text-primary-darker" title="Выйти"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>    
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form> 
    @endauth					
</nav>