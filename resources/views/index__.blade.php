@extends('layouts.default')

@section('title', env('APP_NAME').' | '.env('APP_DESCR'))

@section('content')
<main id="site-main" class="site-main bg-dark-lighter px-8 flex flex-wrap flex-col justify-center rounded-bl-3xl rounded-br-3xl">
	<div class="inner sm:w-4/5 w-full mx-auto mt-11 mb-8 flex flex-col justify-around">

		@foreach ($posts as $post)
			
			<article class="posts my-5 flex flex-wrap md:flex-nowrap border-b-2 border-gray border-opacity-10">

						<div class="post-info md:w-48 md:mb-0 md:mt-2 mb-6 flex-shrink-0 flex flex-col"> 
							<span class="post-category">
								<a class="text-green text-sm uppercase transition duration-300 ease-in-out hover:text-light-gray" href="{{route('getPostsByCategory__', $post->category['slug'])}}">{{$post->category['title']}}</a>
							</span>
							<span class="post-date mt-1 text-xs">
								<time>{{$post->created_at->diffForHumans()}}</time>
							</span>
						
							@if ($post->tags->isNotEmpty())
								<span class="post-tag mt-1">
									@foreach ($post->tags as $tag)
										<a class="text-blue text-xs mr-1 border-b border-blue-darker transition duration-300 ease-in-out hover:border-blue" href="{{route('getPostsByTag__', $tag['slug'])}}">{{ $tag->name }}</a>
									@endforeach
								</span>	
							@endif			
						</div>
					
						<div class="post-block md:flex-grow">
							<h2 class="post-title font-bold text-2xl text-light-gray">
								<a href="{{ route('getPost__', $post->slug) }}">{{$post->title}}</a>
							</h2>
							
							<section class="post-excerpt my-3 text-sm"><p>{{ Str::words($post->description,20,) }}</p></section>
							
							<div class="meta flex mt-5 mb-7 justify-between items-center">
								<span class="learn-more text-sm">
									<a class="text-green transition duration-300 ease-in-out hover:text-light-gray" href="{{ route('getPost__', $post->slug) }}">Читать далее
										<i class="fas fa-arrow-right" style="font-size: 0.750em"></i>
									</a>
								</span>

								@if (Auth::user())
									<span class="post-tag">
										<a class="text-blue text-xs mr-1 border-b border-blue-darker transition duration-300 ease-in-out hover:border-blue" href="{{ route('posts.edit', $post) }}">Править</a>
									</span>
								@endif									
							</div>
						</div>

			</article>		

		@endforeach

	</div>

	<div class="pagination-block flex justify-center mb-8 mx-auto">
		{{ $posts->links('vendor.pagination.semantic-ui') }}
	</div>
</main>
@endsection