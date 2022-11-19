@extends('layouts.blog')

@section('title', config('app.name') . ' | ' . config('app.description'))

@section('content')

    <div class="max-w-3xl md:mt-7 px-5 mx-auto md:px-0 mb-5">
        <h1 class="text-4xl font-bold text-black dark:text-light-white">Новая запись</h1>
    </div>

    <main id="site-main" class="site-main">
        <div class="inner w-full sm:max-w-3xl mx-auto md:my-3 flex flex-col">
            <div id="note-crud">
                <create-note></create-note>
            </div>
        </div>
    </main>

@endsection

@push('editor')
    <script src="{{ mix('/js/app.js') }}"></script>
@endpush
