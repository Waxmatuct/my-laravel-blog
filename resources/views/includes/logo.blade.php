<div class="logo flex items-center self-start">
    <a class="md:block border-0" href="{{ url('/') }}">
        <img class="site-avatar mr-2 w-10 h-10 rounded-full" src="{{ asset('/assets/images/avatar.jpg') }}">
    </a>
    <div class="flex flex-col items-start w-20">    
        <h1 class="md:inline-block site-title text-sm font-bold leading-snug">
            <a class="text-primary dark:text-primary-darker hover:text-black dark:hover:text-light-gray border-0" href="{{ url('/') }}">{{ config('app.name') }}</a>
        </h1>
    </div>
</div>