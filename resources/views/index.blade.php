@extends('layouts.main')

@section('title', env('APP_NAME').' | '.env('APP_DESCR'))

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">

		@foreach ($posts as $post)
			<article class="post">
				<header class="post-header">
					<span class="post-category"><a href="{{route('getPostsByCategory', $post->category['slug'])}}"><i class="fas fa-layer-group"></i> {{$post->category['title']}}</a></span>
					<h2 class="post-title"><a href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a></h2>
				</header>
				<section class="post-excerpt"><p>{{ Str::words($post->description,30,) }}</p></section>
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

					@if (Auth::user())
						<span class="post-tag">
							<a href="{{ route('posts.edit', $post) }}">Править</a>
						</span>
					@endif
				</div>
			</article>			
		@endforeach

	</div>
	<div class="pagination-block">
		{{ $posts->links('vendor.pagination.semantic-ui') }}
	</div>
</main>
@endsection