@extends('layouts.main')

@section('title', env('APP_NAME').' | '.$post->title)

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">
        <article class="post">
            <header class="post-header">
                <span class="post-category"><a href="{{route('getPostsByCategory', $post->category['slug'])}}"><i class="fas fa-layer-group"></i> {{$post->category['title']}}</a></span>
                <h2 class="post-title">{{$post->title}}</h2>
            </header>
            <section class="post-content">
                {!! $post->content !!}
            </section>
            <div class="meta">
                <span class="post-date">
                    <time><i class="far fa-clock"></i> {{$post->created_at->diffForHumans()}}</time>
                </span>
                @if ($post->tags->count() == 0)
                <span></span>							
                @else
                <span class="post-tag">
                    <i class="fas fa-tags"></i>
                    @foreach ($post->tags as $tag)
                        <a href="{{route('getPostsByTag', $tag['slug'])}}">{{ $tag->name }}</a>
                    @endforeach
                </span>	
                @endif
                <span class="post-tag"><a href="{{route('posts.edit', $post)}}">Править</a></span>
            </div>
            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir"></div>
        </article>
	</div>
</main>
@endsection