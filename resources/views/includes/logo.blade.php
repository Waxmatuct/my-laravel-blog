<div class="logo flex items-center self-start">
    <a class="md:block" href="{{ url('/') }}">
        <img class="site-avatar mr-4 w-10 h-10 rounded-full" src="{{ asset('/assets/images/avatar.jpg') }}">
    </a>
    <div class="hidden sm:flex flex-col items-start">    
        <h1 class="md:inline-block site-title font-bold">
            @if ($site_name)
                <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">{{ $site_name }}</a>
            @else 
                <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">alvar</a>
            @endif
        </h1>
        
        @if ($site_description)
            <h2 class="site-description text-black dark:text-gray text-xs">{{ $site_description }}</h2>
        @else
            <h2 class="site-description text-dark-gray dark:text-gray text-xs">Простой блог на Laravel</h2>
        @endif
    </div>
</div>