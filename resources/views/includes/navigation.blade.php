<nav class="site-nav sticky top-0 bg-light dark:bg-dark-lighter shadow-lg z-50">						
    <div class="site-nav-inner md:flex max-w-7xl px-8 lg:px-0 py-4 mx-auto justify-between sm:justify-start md:justify-center lg:justify-start md:py-2">
        
        @include('includes.logo')

            <button id="showNav" class="block absolute right-3 top-3 px-2 py-2 sm:hidden text-black dark:text-light-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="menu" class="site-nav-content hidden sm:flex justify-center items-center sm:mx-8 lg:mx-16">
                <ul class="flex flex-wrap list-none sm:flex-row space-x-0 sm:space-x-7 space-y-3 sm:space-y-0 items-center sm:items-start flex-col">
                    @if ( request()->is('blog*') )
                        <li class="sm:mb-3">
                            <a class="menu-item {{ request()->is('blog') ? 'active' : null }} uppercase" href="{{ url('/blog') }}">Блог</a>
                        </li>
                        <li class="sm:mb-3">
                            <span class="hidden sm:block text-black dark:text-light">||</span>
                        </li>
                        @foreach ($categories as $category)
                            <li class="sm:mb-3"> 
                                <a class="menu-item" id="{{ $category['id'] }}" href="{{route('getPostsByCategory', $category['slug'])}}">{{ $category['title'] }}</a>
                            </li>
                        @endforeach
                            <li class="sm:mb-3">
                                <span class="hidden sm:block text-black dark:text-light">||</span>
                            </li>
                            <li class="sm:mb-3">
                                @include('includes.switcher')
                            </li>                    
                    @else
                        <li class="">
                            <a class="menu-item {{ request()->is('blog*') ? 'active' : null }} uppercase" href="{{ url('/blog') }}">Блог</a>
                        </li>
                        <li class="">
                            <a class="menu-item {{ request()->is('projects') ? 'active' : null }} uppercase" href="{{ url('/projects') }}">Проекты</a>
                        </li>
                        <li class="">
                            @include('includes.switcher')
                        </li>
                    @endif

                </ul>
            </div>

    </div>
</nav>