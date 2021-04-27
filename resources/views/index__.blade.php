@extends('layouts.default')

@section('title', env('APP_NAME').' | '.env('APP_DESCR'))

@section('content')
<main id="site-main" class="site-main bg-light-white shadow-2xl dark:bg-dark-lighter px-8 flex flex-wrap flex-col justify-center rounded-bl-3xl rounded-br-3xl">
	<div class="inner sm:w-4/5 w-full mx-auto mt-11 mb-8 flex flex-col justify-around">

		@foreach ($posts as $post)
			
			<article class="posts my-5 flex flex-wrap md:flex-nowrap border-b-2 border-gray border-opacity-10">

						<div class="post-info md:w-48 md:mb-0 md:mt-2 mb-6 flex-shrink-0 flex flex-col"> 
							<span class="post-category">
								<a class="text-sm uppercase" href="{{route('getPostsByCategory__', $post->category['slug'])}}">{{$post->category['title']}}</a>
							</span>
							<span class="post-date mt-1 text-xs">
								<time>{{$post->created_at->diffForHumans()}}</time>
							</span>
						
							@if ($post->tags->isNotEmpty())
								<span class="post-tag mt-1">
									@foreach ($post->tags as $tag)
										<a class="text-green-darker dark:text-green hover:text-green-darker dark:hover:text-green text-xs mr-1 border-b border-green-darker hover:border-green-darker dark:hover:border-green border-opacity-50" href="{{route('getPostsByTag__', $tag['slug'])}}">{{ $tag->name }}</a>
									@endforeach
								</span>	
							@endif			
						</div>
					
						<div class="post-block md:flex-grow">
							<h2 class="post-title font-bold text-2xl">
								<a class="text-dark dark:text-light-gray hover:text-green-darker dark:hover:text-green" href="{{ route('getPost__', $post->slug) }}">{{$post->title}}</a>
							</h2>
							
							<section class="post-excerpt my-3 text-sm"><p>{{ Str::words($post->description,20,) }}</p></section>
							
							<div class="meta flex mt-5 mb-7 justify-between items-center">
								<span class="learn-more text-sm">
									<a class="text-dark-gray dark:text-green hover:text-green-darker dark:hover:text-light" href="{{ route('getPost__', $post->slug) }}">Читать далее
										<i class="fas fa-arrow-right" style="font-size: 0.750em"></i>
									</a>
								</span>

								@if (Auth::user())
									<span class="post-tag">
										<a href="{{ route('posts.edit', $post) }}">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
											  </svg>
										</a>
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