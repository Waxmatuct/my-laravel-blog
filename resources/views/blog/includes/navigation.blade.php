<nav class="site-nav">
    <div class="site-nav-inner max-w-5xl flex py-4 mx-auto sm:flex-row items-center flex-col relative md:py-2">
    
        @include('includes.logo')

        <div class="site-nav-content flex justify-center items-center mx-16">
            <ul class="flex flex-wrap list-none flex-col sm:flex-row items-center">
                <li class="mx-5 my-1 sm:my-0">
                    <a class="menu-item {{ request()->is('blog') ? 'active' : null }}" href="{{ url('/blog') }}">Блог</a>
                </li>
                <li class="mx-5 my-1 sm:my-0">
                    <a class="menu-item {{ request()->is('projects') ? 'active' : null }}" href="{{ url('/projects') }}">Проекты</a>
                </li>
                <li class="mx-5 my-1 sm:my-0">
                    <a class="menu-item {{ request()->is('tags') ? 'active' : null }}" href="{{ url('/tags') }}">Теги</a>
                </li>
            </ul>
        </div>
            
        @include('includes.switcher')

    </div>			
</nav>