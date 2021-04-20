@extends('layouts.base')

@section('title', env('APP_NAME').' | '.env('APP_DESCR'))

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">

		@foreach ($posts as $post)
			
			<article class="post" style="display: flex; flex-flow: row wrap">
				@if ($post->image)
						<div class="post-thumbnail" style="width: 150px; margin-right: 20px"> 
							<img src="{{$post->image}}" alt="">
						</div>
				@endif
					
				<div class="post-block" @if ($post->image) style="max-width: 483px" @endif>
					<header class="post-header">
						<span class="post-category"><a href="{{route('getPostsByCategory', $post->category['slug'])}}"><i class="fas fa-layer-group"></i> {{$post->category['title']}}</a></span>
	
						<h2 class="post-title"><a href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a></h2>
					</header>
					
					<section class="post-excerpt"><p>{{ Str::words($post->description,30,) }}</p></section>
					
					<div class="meta">
						<span class="post-date">
							<time><i class="far fa-clock"></i> {{$post->created_at->diffForHumans()}}</time>
						</span>
	
						@if ($post->tags->isNotEmpty())
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
				</div>

			</article>		

		@endforeach

	</div>
	<aside class="sidebar">
		<div class="widget">
			<h2>
				Заголовок виджета 1
			</h2>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque reiciendis obcaecati sint quae aut modi eligendi error, ipsam libero aliquid, quo quisquam sapiente. Enim in quia modi eos, sed fugit.
			</p>
		</div>
		<div class="widget">
			<h2>
				Заголовок виджета 2
			</h2>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque reiciendis obcaecati sint quae aut modi eligendi error, ipsam libero aliquid, quo quisquam sapiente. Enim in quia modi eos, sed fugit.
			</p>
		</div>
	</aside>
	<div class="pagination-block">
		{{ $posts->links('vendor.pagination.semantic-ui') }}
	</div>
</main>
@endsection