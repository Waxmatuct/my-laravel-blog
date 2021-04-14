@extends('dashboard.layouts.base')

@section('content')
<h1 class="text-2xl font-bold text-black">Добавить новый пост</h1>

@include('dashboard.includes.message')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="flex flex-wrap">
    <div class="w-full lg:w-2/3 my-3 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form action="{{ route('posts.store') }}" method="POST" class="p-10 bg-white rounded shadow-xl">
                @csrf
                <div class="flex flex-col sm:flex-row">
                    <div class="md:w-2/3 sm:mr-5 mb-5">
                        <label class="block text-sm text-gray-600" for="title">Заголовок</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Заголовок" aria-label="Title" value="{{ old('title') }}">
                    </div>
                    <div class="md:w-1/3 mb-5">
                        <label class="block text-sm text-gray-600" for="slug">URL</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="Url поста" aria-label="Slug" value="{{ old('slug') }}">
                    </div>
                </div>
                <div class="">
                    <label class="block text-sm text-gray-600" for="slug">Описание</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text" placeholder="Описание поста" aria-label="Description" value="{{ old('description') }}">
                </div>
                <div class="mt-5">
                    <label class="block text-sm text-gray-600" for="category">Категория</label>
                    <div class="relative w-max">
                        <select class="text-gray-600 bg-gray-200 rounded appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </div>
                </div>

                <div class="mt-5">
                    <label class="block text-sm text-gray-600" for="category">Теги</label>
                    @foreach ($tags as $tag)
                        <label for="tag{{ $tag->id }}" class="inline-flex items-center mr-3 wrap">
                            <input type="checkbox" name="tags[]" id="tag{{ $tag->id }}" class="h-4 w-4 text-purple-600" value="{{ $tag->id }}"><span class="text-sm ml-1 text-gray-700">{{ $tag->name }}</span>
                        </label>    
                    @endforeach
                </div>
    
                <div class="mt-5">
                    <label class=" block text-sm text-gray-600" for="message">Пост</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="tiny" name="content" rows="12" required="" placeholder="" aria-label="Content">{{ old('content') }}</textarea>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-purple-700 hover:bg-green-500 rounded" type="submit">Отправить</button>
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
    <script src="https://cdn.tiny.cloud/1/7oc5a4pw1zhkloaxzcp0owb2if5b7vw0wbam8avvv26u7usu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#tiny',
          menubar: false,
          language: 'ru',
          plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
            ],
        toolbar: 'undo redo preview | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | link media code image | ' +
            'removeformat | help'
       });

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