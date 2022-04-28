<nav class="site-nav sticky mb-3 top-0 bg-light dark:bg-dark-lighter z-50">
    <div
        class="site-nav-inner md:flex max-w-7xl px-5 lg:px-0 py-4 mx-auto justify-between sm:justify-start md:justify-center lg:justify-start md:py-2">

        @include('includes.logo')

        <button id="showNav"
            class="block absolute right-3 top-3 px-2 py-2 sm:hidden text-black dark:text-light-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div id="menu" class="site-nav-content hidden sm:flex justify-center items-center sm:mx-8 lg:mx-10">
            <ul
                class="flex flex-wrap list-none sm:flex-row space-x-0 sm:space-x-5 space-y-3 sm:space-y-0 items-center flex-col">
                <li class="">
                    <a class="menu-item" href="{{ route('blog') }}" title="На главную">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                </li>
                @foreach ($categories as $category)
                    <li class="">
                        <a class="menu-item" id="{{ $category['id'] }}"
                            href="{{ route('getPostsByCategory', $category['slug']) }}">{{ $category['title'] }}</a>
                    </li>
                @endforeach
                <li class="">
                    @include('includes.switcher')
                </li>
                @if (Auth::check())
                    @if (Auth::user()->isAdmin)
                        <li class="">
                            <a class="menu-item" href="{{ url('/notes') }}">Дневник</a>
                        </li>
                        <li class="">
                            <a class="menu-item" href="{{ route('dashboard') }}">Админка</a>
                        </li>
                        <li class="">
                            <a href="{{ route('logout') }}" class="menu-item" title="Выйти"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Выйти
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endif
                @endif

            </ul>
        </div>

    </div>
</nav>
