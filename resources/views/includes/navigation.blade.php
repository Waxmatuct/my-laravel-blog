<nav class="site-nav mt-2">						
    <div class="site-nav-inner flex max-w-7xl px-8 lg:px-0 py-4 mx-auto sm:flex-row justify-between sm:justify-start md:justify-center lg:justify-start md:py-2">
        
        @include('includes.logo')

        <div class="site-nav-content flex justify-center items-start sm:mx-8 lg:mx-16">
            <ul class="flex flex-wrap list-none sm:flex-row space-x-0 sm:space-x-7 space-y-3 sm:space-y-0 sm:items-start items-center flex-col">
                @if ( request()->is('blog*') )
                    <li class="sm:mb-3">
                        <a class="menu-item {{ request()->is('blog') ? 'active' : null }}" href="{{ url('/blog') }}">Блог</a>
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
                        <a class="menu-item {{ request()->is('blog*') ? 'active' : null }}" href="{{ url('/blog') }}">Блог</a>
                    </li>
                    <li class="">
                        <a class="menu-item {{ request()->is('projects') ? 'active' : null }}" href="{{ url('/projects') }}">Проекты</a>
                    </li>
                    <li class="">
                        @include('includes.switcher')
                    </li>
                @endif

            </ul>
        </div>

    </div>
</nav>