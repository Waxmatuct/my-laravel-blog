<div class="logo flex items-center">
    <a class="hidden md:block" href="/">
        <img class="site-avatar mr-4 w-12 h-12 rounded-full" src="{{ asset('/assets/images/logo.jpg') }}">
    </a>
    <h1 class="hidden md:block site-title font-bold text-4xl uppercase tracking-widest">
        @if ($site_name)
            <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">{{ $site_name }}</a>
        @else 
            <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">alvar</a>
        @endif
    </h1>
</div>