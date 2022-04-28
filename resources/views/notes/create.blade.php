@extends('layouts.blog')

@section('title', config('app.name') . ' | ' . config('app.description'))

@section('content')

    <div class="max-w-7xl md:mt-7 px-5 mx-auto md:px-0 mb-5">
        <h1 class="text-4xl font-bold text-black dark:text-light-white">Новая запись</h1>
    </div>

    <main id="site-main" class="site-main">
        <div class="inner w-full sm:max-w-2xl mx-auto md:my-3 flex flex-col">

            <form action="{{ route('notes.store') }}" method="POST" id="createPostForm">
                @csrf
                <div class="">
                    <label class="leading-7 block text-sm text-gray-600" for="title">Заголовок</label>
                    <input
                        class="w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        id="title" name="title" type="text" placeholder="Заголовок" aria-label="Title"
                        value="{{ old('title') }}">
                </div>

                <div class="mt-5">
                    <label class="leading-7 block text-sm text-gray-600" for="message">Пост</label>
                    <div id="editor"
                        class="w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary h-32 text-base outline-none text-black dark:text-light resize-y leading-6 transition-colors duration-200 ease-in-out"
                        name="content" rows="15" placeholder="" aria-label="Content">{{ old('content') }}</div>
                    <input type="hidden" name="content" id="content">
                </div>

                <div class="mt-6">
                    <button class="button" type="submit">Отправить</button>
                </div>
            </form>

        </div>

    </main>
@endsection
