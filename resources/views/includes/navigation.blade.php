<nav class="site-nav">						
    <div class="site-nav-content">
        {{-- @if (request()->route()->getName() == 'index')
            <h1 class="post-title">Блог Альвара</h1>
        @else
            <h1 class="post-title">{{$post->title}}</h1>
        @endif							 --}}
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="">Портфолио</a></li>
            <li><a href="">Контакты</a></li>
        </ul>									
    </div>							
</nav>