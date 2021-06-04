<nav class="site-nav">
    <div class="site-nav-inner max-w-5xl flex justify-around py-4 mx-auto sm:flex-row items-center flex-col relative md:py-2">
    
        @include('includes.logo')

        <div class="site-nav-content flex justify-center items-center mx-16">
            <ul class="flex flex-wrap list-none flex-col sm:flex-row items-center">
                <li class="mx-5 my-1 sm:my-0">
                    <a class="menu-item {{ request()->is('blog') ? 'menu-item-active' : null }}" href="{{ url('/blog') }}">Главная</a>
                </li>
            </ul>
        </div>

        @include('includes.switcher')
        
        <div class="logout flex items-center">
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
        </div>
    </div>			
</nav>