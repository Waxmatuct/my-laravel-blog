@extends('layouts.blog')

@section('title', $site_name.' | '.$site_description)

@section('content')

<section class="categories max-w-5xl mx-auto md:mt-10 px-8 md:px-0 flex flex-wrap flex-col justify-center">
	<ul class="flex flex-wrap list-none items-center justify-center">
		@foreach ($categories as $category)
			<li class="mx-2 mb-3 sm:my-0">
				<a class="block py-1 px-2 border text-primary dark:text-primary hover:text-black dark:hover:text-light border-primary hover:border-primary  hover:bg-primary dark:hover:bg-primary" id="{{ $category['id'] }}" href="{{route('getPostsByCategory', $category['slug'])}}">{{ $category['title'] }}</a>
			</li>
		@endforeach
	</ul>
</section>

<main id="site-main" class="site-main max-w-5xl mx-auto md:mt-10 px-8 md:px-0 flex flex-wrap flex-col justify-center">
	<div class="inner w-full mx-auto md:my-3 flex flex-col justify-around">
	
		@foreach ($posts as $post)
			
			<article class="posts mb-5 flex flex-wrap md:flex-nowrap border-b-2 border-gray border-opacity-10">

						<div class="post-info md:w-48 md:mb-0 md:mt-2 mb-6 flex-shrink-0 flex flex-col"> 
							<span class="post-category">
								<a class="" href="{{route('getPostsByCategory', $post->category['slug'])}}">{{$post->category['title']}}</a>
							</span>
							<span class="post-date mt-1 text-xs">
								<time>{{$post->created_at->diffForHumans()}}</time>
							</span>
						
							@if ($post->tags->isNotEmpty())
								<span class="post-tag mt-1">
									@foreach ($post->tags as $tag)
										<a class="text-primary-darker dark:text-primary hover:text-primary-darker dark:hover:text-primary text-xs mr-1 border-b border-primary-darker hover:border-primary-darker dark:hover:border-primary border-opacity-30" href="{{route('getPostsByTag', $tag['slug'])}}">{{ $tag->name }}</a>
									@endforeach
								</span>	
							@endif

							<span class="text-xs mt-1 inline-flex">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
								</svg>{{ $post->views }}
							</span>

							@if (Auth::check())
								@if (Auth::user()->isAdmin)
									<a class="text-xs mt-2 inline-flex" href="{{route('posts.edit', $post)}}">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
										</svg>Правка
									</a>
								@endif
							@endif	
							
						</div>
					
						<div class="post-block w-full md:flex-grow">
							<h2 class="post-title font-bold text-3xl">
								<a class="text-black dark:text-light-gray hover:text-primary-darker dark:hover:text-primary" href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a>
							</h2>
							
							<section class="post-content my-3 text-md">
								{!! $post->content !!}
							</section>

							<div class="my-8">
								<script src="https://yastatic.net/share2/share.js"></script>
								<div class="ya-share2" data-curtain data-size="s" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter"></div>
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