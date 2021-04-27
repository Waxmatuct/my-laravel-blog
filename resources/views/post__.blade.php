@extends('layouts.default')

@section('title', env('APP_NAME').' | '.$post->title)

@section('content')
<main id="site-main" class="site-main bg-light-white shadow-2xl dark:bg-dark-lighter px-8 flex flex-wrap justify-center rounded-bl-3xl rounded-br-3xl">
	<div class="post-page flex-1 md:w-2/3 w-full mx-auto my-11 flex flex-col justify-around">
        <article class="post mx-auto md:w-2/3">
            <header class="post-header">
                <h1 class="post-title font-bold text-2xl text-dark dark:text-light-gray">{{$post->title}}</h1>
            </header>
            <section class="post-content my-3">
                {!! $post->content !!}
            </section>
            <div class="meta flex justify-between items-center">
                <span class="post-date text-xs">
                    <time><i class="far fa-clock"></i> {{$post->created_at->diffForHumans()}}</time>
                </span>
                <span class="post-category text-xs">
                    <i class="fas fa-layer-group"></i> <a class="uppercase" href="{{route('getPostsByCategory__', $post->category['slug'])}}">{{$post->category['title']}}</a>
                </span>
                @if ($post->tags->isNotEmpty())
                    <span class="post-tag text-xs">
                        <i class="fas fa-tags"></i>
                        @foreach ($post->tags as $tag)
                            <a class="text-green-darker dark:text-green hover:text-green-darker dark:hover:text-green text-xs mr-1 border-b border-green-darker hover:border-green-darker dark:hover:border-green border-opacity-50" href="{{route('getPostsByTag__', $tag['slug'])}}">{{ $tag->name }}</a>
                        @endforeach
                    </span>	
                @endif
                @if (Auth::user())
                <span class="text-xs">
                    <a href="{{route('posts.edit', $post)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                    </a>
                </span>
                @endif
            </div>
            {{-- <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir"></div> --}}
        </article>
	</div>
    
    {{-- <aside class="sidebar flex-shrink-0 md:w-1/3 w-full my-11">
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
	</aside> --}}
</main>
@endsection