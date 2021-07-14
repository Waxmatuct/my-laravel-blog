@extends('layouts.blog')

@section('title', $post->title .' | ' .env('APP_NAME'))

@section('content')
<main id="site-main" class="site-main max-w-5xl mx-auto md:mt-10 px-8 flex flex-wrap justify-center rounded-3xl">
    @include('blog.includes.message')
	<div class="post-page mx-auto md:my-8 my-5 w-full flex flex-col justify-around">
        <div class="breadcrubs inline-flex text-base items-center">
            <a class="flex items-center mr-1 pb-1" href="{{ url('/blog') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a> 
            
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>

            <a class="mr-1 border-b border-primary hover:border-primary dark:hover:border-primary-darker border-opacity-30" href="{{ route('getPostsByCategory', $post->category['slug']) }}">
                {{$post->category['title']}}
            </a>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>

            <span>
                {{$post->title}}
            </span>
        </div>
        <article class="post mx-auto mt-8 w-full">
            <header class="post-header">
                <h1 class="post-title font-bold text-3xl sm:text-4xl text-black dark:text-light-gray">{{$post->title}}</h1>
            </header>
            <section class="post-content my-3">
                {!! $post->content !!}
            </section>
            <div class="meta flex items-center">
                <span class="post-date text-xs inline-flex mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    {{$post->created_at->diffForHumans()}}</time>
                </span>

                @if ($post->tags->isNotEmpty())
                    <span class="post-tag text-xs inline-flex mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                          </svg>
                        @foreach ($post->tags as $tag)
                            <a class="text-xs mr-1 border-b border-primary hover:border-primary dark:hover:border-primary-darker border-opacity-30" href="{{route('getPostsByTag', $tag['slug'])}}">{{ $tag->name }}</a>
                        @endforeach
                    </span>	
                @endif

                <span class="text-xs inline-flex mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>{{ $post->views }}
                </span>

            </div>
            @if (Auth::check())
                @if (Auth::user()->isAdmin)
                    <a class="text-xs mt-4 inline-flex border-0" href="{{route('posts.edit', $post)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg> Правка
                    </a>
                @endif	
            @endif
            <div class="my-5">
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-curtain data-size="s" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter"></div>
            </div>
        </article>
        
        @include('blog.includes.comments')

	</div>
</main>
@endsection

@push('recaptcha')
<script type="text/javascript">
    var verifyCallback = function(response) {
        document.getElementById("captcha").disabled = false;
      };

    var onloadCallback = function() {
      grecaptcha.render('recaptcha', {
        'sitekey' : '6LconQgbAAAAAFtY79B7A9g4eLRLGZ1KSNPeuXLx',
        'callback' : verifyCallback,
      });
    };

  </script>

@endpush

@push('fade')
<script>
    function fade(element) {
        var op = 1;  // initial opacity
        var timer = setInterval(function () {
            if (op <= 0.1){
                clearInterval(timer);
                element.style.display = 'none';
            }
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
        }, 50);
    }
</script>
@endpush