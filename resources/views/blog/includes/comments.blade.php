<div id="comments" class="flex flex-col">
    <div class="comments-heading mb-4">
        @if ($post->comments->isNotEmpty())
            <span class="text-base font-bold">
                {{ $post->comments->count()}} комментариев
            </span>
        @else
            <span class="font-bold">
                Нет комментариев
            </span>
        @endif
    </div>
    
    @foreach ($post->comments as $comment)
    <div id="comment-{{ $comment->id }}" class="comment h-full flex flex-row justify-start text-left mb-4">
        <div class="flex-shrink-0 w-12 h-12 bg-light-gray dark:bg-dark rounded-full inline-flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </div>
        <div class="flex flex-col flex-grow pl-4">
            @if ($comment->website)
                <a href="{{ $comment->website }}" class="font-bold">{{ $comment->username }}</a>
            @else
                <span class="font-bold">{{ $comment->username }}</span>
            @endif
            <span class="post-date text-xs mb-3">
                {{ $comment->created_at->diffForHumans() }}
            </span>
            <p class="mb-4">
                {{ $comment->comment }}
            </p>
        </div>
    </div>
    @endforeach

    <div x-data="{show: false}">
        <button @click="show = !show" class="button">Комментировать</button>
        <div x-show.transition.in.opacity.duration.500ms.out.duration.200ms="show" x-cloak>
            <form method="POST" action="{{ route('storeComment', $post) }}">
                @csrf
                <div class="relative md:w-4/5 my-4">
                    <label for="username" class="leading-7 text-sm text-black dark:text-gray">Имя*</label>
                    <input type="text" id="username" name="username" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('username') }}" required autocomplete="username" autofocus>
                </div>
                <div class="relative md:w-4/5 mb-4">
                    <label for="website" class="leading-7 text-sm text-black dark:text-gray">Сайт</label>
                    <input type="text" id="website" name="website" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('website') }}" autocomplete="website" autofocus>
                </div>
                <div class="">
                <div class="relative md:w-4/5 mb-4">
                    <label for="comment" class="leading-7 text-sm text-black dark:text-gray">Комментарий*</label>
                    <textarea id="comment" name="comment" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary h-32 text-base outline-none text-black dark:text-light py-1 px-3 resize-y leading-6 transition-colors duration-200 ease-in-out">{{ old('comment') }}</textarea>
                </div>
                <input id="post_id" name="post_id" type="hidden" value="{{ $post->id }}">
                <div id="recaptcha" class="mb-4"></div>
                <input type="submit" class="button" value="Отправить"></input>
            </form>
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"async defer></script>    
        </div>
    </div>
</div>