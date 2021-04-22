<nav class="site-nav bg-dark-lighter flex justify-center rounded-tl-3xl rounded-tr-3xl shadow-lg">						
    <div class="site-nav-content flex justify-center items-center px-12">
        <ul class="flex flex-wrap list-none ">
            @foreach ($categories as $category)
                <li class="mx-5">
                    <a class="text-green uppercase relative border-b-2 border-dark-lighter transition duration-300 ease-in-out hover:border-green" id="{{ $category['id'] }}" href="{{route('getPostsByCategory__', $category['slug'])}}">{{ $category['title'] }}</a>
                </li>
            @endforeach
        </ul>									
    </div>							
</nav>