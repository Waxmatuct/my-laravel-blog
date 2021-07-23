<div id="comments" class="flex flex-col">
    <div class="comments-heading mb-4">
        @if ($comments->isNotEmpty())
            <span class="text-base font-bold">
                {{ $comments->count() }} комментариев
            </span>
        @else
            <span class="font-bold">
                Нет комментариев
            </span>
        @endif
    </div>
    
    @foreach ($comments as $comment)
    <div id="comment-{{ $comment->id }}" class="comment h-full flex flex-row justify-start text-left mb-4">
        <div class="flex-shrink-0 w-12 h-12 bg-light-gray dark:bg-dark rounded-full inline-flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-primary dark:text-primary-darker" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </div>
        <div class="flex flex-col flex-grow pl-4">
            @if ($comment->website)
                <a class="border-0" href="{{ $comment->website }}" class="font-bold">{{ $comment->username }}</a>
            @else
                <span class="font-bold">{{ $comment->username }}</span>
            @endif
            <span class="post-date text-xs mb-3">
                {{ $comment->created_at->diffForHumans() }}
            </span>
            <p class="mb-4">
                {!! nl2br(e($comment->comment)) !!}
            </p>
        </div>
    </div>
    @endforeach

    <div class="mt-4">

        @if (Auth::check())

        <span class="font-bold">
            {{ $user->name }}, добавить комментарий
        </span>
        <form method="POST" action="{{ route('storeComment', $post) }}">
            @csrf
            <input type="hidden" id="username" name="username"  value="{{ $user->name }}">
            <input type="hidden" id="website" name="website" value="https://alvar.ru">
            <div class="relative md:w-4/5 mb-4">
                <label for="comment" class="leading-7 text-sm text-black dark:text-gray">Комментарий*</label>
                <textarea id="comment" name="comment" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary h-32 text-base outline-none text-black dark:text-light py-1 px-3 resize-y leading-6 transition-colors duration-200 ease-in-out">{{ old('comment') }}</textarea>
                
                @error('comment')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
                @enderror                    
            </div>
            <input id="post_id" name="post_id" type="hidden" value="{{ $post->id }}">
            <button type="submit" class="button">Отправить</button>
        </form>

        @else
         
        <span class="font-bold">
           Добавить комментарий
        </span>
        <form method="POST" action="{{ route('storeComment', $post) }}">
            @csrf
            <div class="relative md:w-4/5 my-4">
                <label for="username" class="leading-7 text-sm text-black dark:text-gray">Имя*</label>
                <input type="text" id="username" name="username" @error('username') is-invalid @enderror" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('username') }}" required autocomplete="username">
                
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="relative md:w-4/5 mb-4">
                <label for="website" class="leading-7 text-sm text-black dark:text-gray">Сайт (если есть)</label>
                <input type="text" id="website" name="website" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('website') }}" autocomplete="website">
            </div>
            <div class="">
            <div class="relative md:w-4/5 mb-4">
                <label for="comment" class="leading-7 text-sm text-black dark:text-gray">Комментарий*</label>
                <textarea id="comment" name="comment" @error('comment') is-invalid @enderror" class="w-full bg-light-white dark:bg-dark rounded border border-gray focus:border-indigo-500 focus:border focus:border-primary h-32 text-base outline-none text-black dark:text-light py-1 px-3 resize-y leading-6 transition-colors duration-200 ease-in-out">{{ old('comment') }}</textarea>
                
                @error('comment')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
                @enderror                    
            </div>
            <input id="post_id" name="post_id" type="hidden" value="{{ $post->id }}">
            <div id="recaptcha" class="mb-4"></div>
            <button type="submit" id="captcha" disabled class="button">Отправить</button>
        </form>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
        @endif
        
    </div>
</div>