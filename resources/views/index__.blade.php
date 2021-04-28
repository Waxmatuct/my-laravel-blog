@extends('layouts.base')

@section('title', env('APP_NAME').' | '.env('APP_DESCR'))

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">

		@foreach ($posts as $post)
			
			<article class="posts">

						<div class="post-info"> 
							<span class="post-category"><a href="{{route('getPostsByCategory__', $post->category['slug'])}}">{{$post->category['title']}}</a></span>
							<span class="post-date">
								<time>{{$post->created_at->diffForHumans()}}</time>
							</span>
						
							@if ($post->tags->isNotEmpty())
								<span class="post-tag">
									@foreach ($post->tags as $tag)
										<a href="{{route('getPostsByTag__', $tag['slug'])}}">{{ $tag->name }}</a>
									@endforeach
								</span>	
							@endif			
						</div>
					
				<div class="post-block">
					<header class="post-header">
						<h2 class="post-title"><a href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a></h2>
					</header>
					
					<section class="post-excerpt"><p>{{ Str::words($post->description,20,) }}</p></section>
					
					<div class="meta">
						<span class="learn-more">
							<a class="" href="{{ route('getPost', $post->slug) }}">Читать далее
								<i class="fas fa-arrow-right" style="font-size: 0.750em"></i>
							</a>
						</span>

						@if (Auth::user())
							<span class="post-tag">
								<a href="{{ route('posts.edit', $post) }}">Править</a>
							</span>
						@endif									
					</div>
				</div>

			</article>		

		@endforeach

	</div>

	<div class="pagination-block">
		{{ $posts->links('vendor.pagination.semantic-ui') }}
	</div>
</main>
@endsection