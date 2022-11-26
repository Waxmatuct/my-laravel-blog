@extends('layouts.blog')

@section('title', config('app.name') . ' | ' . config('app.description'))

@section('content')

    @if ($message = Session::get('success'))
        <div class="max-w-7xl md:mt-7 px-5 mx-auto md:px-0 mb-5 flex items-center space-x-5">
            <p class="text-primary dark:text-primary-darker">{{ $message }}</p>
        </div>
    @endif

    <div class="max-w-7xl md:mt-7 px-5 mx-auto md:px-0 mb-5 flex items-center space-x-5">
        <h1 class="text-4xl font-bold text-black dark:text-light-white">Дневник</h1>
{{--        <a href="{{ route('notes.create') }}">Добавить запись</a>--}}
    </div>

    <main id="site-main" class="site-main">
        <div class="inner w-full mx-auto md:my-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">


            @forelse ($notes as $note)
                <div class="posts flex flex-wrap md:flex-nowrap pb-5 border-b-2 border-gray border-opacity-10">

                    <div class="post-block w-full flex flex-col space-y-3">
                        <h2 class="post-title font-bold font-header text-base sm:text-lg sm:leading-none">
                            <a class="text-black dark:text-light-gray hover:text-primary dark:hover:text-primary-darker border-0"
                               href="{{ route('notes.show', $note) }}">{{ $note->title }}</a>
                        </h2>

                        <section class="note text-sm md:leading-tight max-h-80 overflow-hidden">
                            {!! \Str::markdown($note->content, [
                                'html_input' => 'strip',
                            ]) !!}
                        </section>

                        <div class="flex items-center space-x-5 text-xs">
                            <span>
                                <time>{!! Date::parse($note->created_at)->format('d M Y, l') !!}</time>
                            </span>
                            <a href="{{ route('notes.edit', $note) }}">Править</a>
                            <form action="{{ route('notes.destroy', $note) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="text-primary dark:text-primary-darker border-b border-primary hover:border-black dark:hover:border-light hover:text-black dark:hover:text-light border-opacity-30 dark:border-opacity-30 transition duration-300 ease-in-out">
                                    Удалить
                                </button>
                            </form>
                        </div>

                    </div>

                </div>

            @empty
                <p>Здесь пока ничего нет.</p>
            @endforelse

        </div>

        <div class="pagination-block flex justify-center mb-3 mx-auto">
            {{ $notes->links('vendor.pagination.semantic-ui') }}
        </div>
    </main>
@endsection
