@extends('dashboard.layouts.base')

@section('content')
<h1 class="text-3xl text-black">Добавить новую категорию</h1>

@include('dashboard.includes.message')

<div class="flex flex-wrap">
    <div class="w-full lg:w-2/3 my-3 pr-0 lg:pr-2">
        <div class="leading-loose">
            <div class="flex flex-row flex-wrap my-3">
            @foreach ($categories as $category)
                <span class="text-sm px-4 py-1 m-1 text-white font-light tracking-wider bg-purple-700 rounded">• {{ $category->title }}</span>
            @endforeach
            </div>
            <form action="{{ route('categories.store') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
                @csrf
                <div class="md:w-1/3 sm:mr-5 mb-5">
                    <label class="block text-sm text-gray-600" for="title">Название</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Название" aria-label="Title">
                </div>

                <div class="md:w-1/3 mb-5">
                    <label class="block text-sm text-gray-600" for="slug">Slug</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="Slug категории" aria-label="Slug">
                </div>

                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-purple-700 hover:bg-green-500 rounded" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.6.1/jodit.min.js"></script>
@endpush