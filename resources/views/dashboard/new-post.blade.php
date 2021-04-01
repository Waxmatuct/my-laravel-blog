@extends('dashboard.layouts.base')

@section('content')
<h1 class="text-3xl text-black">Добавить новый пост</h1>

<div class="flex flex-wrap">
    <div class="w-full lg:w-2/3 my-3 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl">
                <div class="flex flex-col sm:flex-row">
                    <div class="md:w-2/3 sm:mr-5 mb-5">
                        <label class="block text-sm text-gray-600" for="title">Заголовок</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Заголовок" aria-label="Title">
                    </div>
                    <div class="md:w-1/3 mb-5">
                        <label class="block text-sm text-gray-600" for="slug">URL</label>
                        <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="Url поста" aria-label="Slug">
                    </div>
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="slug">Описание</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text" placeholder="Описание поста" aria-label="Description">
                </div>
                <div class="mt-5">
                    <label class=" block text-sm text-gray-600" for="message">Пост</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="content" name="content" rows="6" required="" placeholder="" aria-label="Content"></textarea>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-sidebar rounded" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@push('editor')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.6.1/jodit.min.css"/>
@endpush
@push('scripts')
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.6.1/jodit.min.js"></script>
    <script>
        var editor = new Jodit('#content', {
            height: 300,
        });
    </script>
@endpush