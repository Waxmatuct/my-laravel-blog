<nav class="site-nav">						
    <div class="site-nav-content">
        <ul>
            @foreach ($categories as $category)
            <li><a href="{{route('getPostsByCategory', $category['slug'])}}">{{ $category['title'] }}</a></li>
            @endforeach
        </ul>									
    </div>							
</nav>