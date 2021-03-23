@extends('layouts.main')

@section('title', 'My Blog')

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">

		@foreach ($posts as $post)
			<article class="post">
				<header class="post-header">
					<h2 class="post-title"><a href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a></h2>
				</header>
				<section class="post-excerpt">{!! $post->description !!}</section>
				<div class="meta">
					<span class="post-date">
						<time datetime="2019-11-29">29 нояб. 2019</time>
					</span>
					<span class="post-tag"><a href="{{route('getPostsByCategory', $post->category['slug'])}}">{{$post->category['title']}}</a></span>
				</div>
			</article>			
		@endforeach

	</div>
	<div class="pagination-block">
		{{ $posts->links('vendor.pagination.semantic-ui') }}
	</div>
</main>
@endsection