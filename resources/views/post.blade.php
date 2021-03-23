@extends('layouts.main')

@section('title', $post->title)

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">
        <article class="post">
            <header class="post-header">
                <h2 class="post-title">{{$post->title}}</h2>
            </header>
            <section class="post-content">
                {!! $post->content !!}
            </section>
            <div class="meta">
                <span class="post-date">
                    <time datetime="2019-11-29">29 нояб. 2019</time>
                </span>
                <span class="post-tag"><a href="{{route('getPostsByCategory', $post->category['slug'])}}">{{$post->category['title']}}</a></span>
            </div>
            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir"></div>
        </article>
	</div>
</main>
@endsection