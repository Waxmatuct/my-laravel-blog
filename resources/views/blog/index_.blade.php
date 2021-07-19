@extends('layouts.blog')

@section('title', config('app.name') .' | ' .config('app.description'))

@section('content')

<div class="max-w-7xl md:mt-7 px-8 mx-auto md:px-0 flex flex-col">
	@if (Route::is('getPostsByCategory'))
		<h1 class="text-4xl sm:text-5xl font-bold text-black dark:text-light-white mb-3">{{ $current_category->title }}</h1>
	@else
		<h1 class="text-4xl sm:text-5xl font-bold text-black dark:text-light-white mb-3">{{ $current_tag->name }}</h1>
	@endif
	<small>В этой теме {{ $posts->count() }} записей</small>
</div>

<main id="site-main" class="site-main">
	<div class="inner w-full mx-auto md:my-3 flex flex-col justify-around">

		@forelse ($posts as $post)
			
			<article class="posts mb-7 flex flex-wrap md:flex-nowrap border-b-2 pb-2 border-gray border-opacity-10">

						<div class="post-info md:items-start md:w-48 md:mb-0 md:mt-2 mb-2 flex-shrink-0 flex md:flex-col md:space-x-0 md:space-y-1 flex-wrap w-full mt-5 items-center justify-start flex-row space-x-4"> 

							<span class="post-date text-xs">
								<time>{{$post->created_at->diffForHumans()}}</time>
							</span>
						
							@if ($post->tags->isNotEmpty())
								<span class="post-tag inline-flex">
									@foreach ($post->tags as $tag)
										<a class="text-primary dark:text-primary-darker hover:text-primary dark:hover:text-primary-darker text-xs mr-1 border-b border-primary hover:border-primary dark:hover:border-primary border-opacity-30" href="{{route('getPostsByTag', $tag['slug'])}}">{{ $tag->name }}</a>
									@endforeach
								</span>	
							@endif

							<span class="text-xs inline-flex">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
								</svg><span class="mr-2">{{ $post->views }}</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
								</svg><span>{{ $post->comments->count() }}</span>
							</span>							

							@if (Auth::check())
								@if (Auth::user()->isAdmin)
									<a class="text-xs mt-2 inline-flex border-0" href="{{route('posts.edit', $post)}}">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
										</svg>Правка
									</a>
								@endif
							@endif	
							
						</div>
					
						<div class="post-block md:flex-grow">
							<h2 class="post-title font-bold text-3xl">
								<a class="text-black dark:text-light-gray hover:text-primary dark:hover:text-primary-darker border-0" href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a>
							</h2>
							
							<section class="post-excerpt my-3"><p class="max-w-3xl">{{ Str::words($post->description,20,) }}</p></section>
							
						</div>

			</article>		

			@empty
			<p>Здесь пока ничего нет.</p>

		@endforelse

	</div>

	<div class="pagination-block flex justify-center mb-3 mx-auto">
		{{ $posts->links('vendor.pagination.semantic-ui') }}
	</div>
</main>
@endsection