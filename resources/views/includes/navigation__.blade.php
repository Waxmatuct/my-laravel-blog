<nav class="site-nav bg-dark-lighter flex justify-center rounded-tl-3xl rounded-tr-3xl">						
    <div class="site-nav-content flex justify-center items-center px-12">
        <ul class="flex flex-wrap list-none ">
            @foreach ($categories as $category)
                <li class="mx-5">
                    <a class="text-green block uppercase p-2.5 relative" id="{{ $category['id'] }}" href="{{route('getPostsByCategory__', $category['slug'])}}">{{ $category['title'] }}</a>
                </li>
            @endforeach
        </ul>									
    </div>							
</nav>