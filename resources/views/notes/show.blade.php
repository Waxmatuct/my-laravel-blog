@extends('layouts.blog')

@section('title', config('app.name') . ' | ' . config('app.description'))

@section('content')

    <div class="max-w-3xl md:mt-7 px-5 mx-auto md:px-0 mb-5 flex items-center space-x-5">
        <h1 class="text-xl md:text-3xl font-bold text-black dark:text-light-white">{{ $note->title }}</h1>
    </div>

    <main id="site-main" class="site-main">
        <div class="inner w-full sm:max-w-3xl mx-auto">

            <div class="post-block flex flex-col space-y-3">

                <section class="post-content">
                    {!! \Str::of($note->content)->markdown() !!}
                </section>

                <div class="flex items-center space-x-5 text-xs">
                    <span>
                        <time>{!! Date::parse($note->created_at)->format('d M Y, l') !!}</time>
                    </span>
                    <a href="{{ route('notes.edit', $note) }}">Редактировать</a>
                </div>


            </div>

        </div>

        {{-- <div class="pagination-block flex justify-center mb-3 mx-auto">
            {{ $posts->links('vendor.pagination.semantic-ui') }}
        </div> --}}
    </main>
@endsection
