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

<div class="flex flex-wrap w-full my-3 pr-0 lg:pr-2">
    <div class="w-full my-3 pr-0 lg:pr-2">
        <form action="{{ route('posts.store') }}" method="POST" class=" p-10 bg-white rounded shadow-xl leading-loose">
            @csrf
            <div class="flex sm:flex-row">
                <div id="col1" class="flex w-2/3 flex-col">
                    
                    <div class="">
                        <label class="block text-sm text-gray-600" for="title">Заголовок</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="title" name="title" type="text" required="" placeholder="Заголовок" aria-label="Title" value="{{ old('title') }}">
                    </div>

                    <div class="mt-5">
                        <label class="block text-sm text-gray-600" for="message">Пост</label>
                        <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="tiny" name="content" rows="15" required="" placeholder="" aria-label="Content">{{ old('content') }}</textarea>
                    </div>
                    
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-purple-700 hover:bg-green-500 rounded" type="submit">Отправить</button>
                    </div>

                </div>
                <div id="col2" class="pl-10 flex w-1/3 flex-col">

                    <div class="">
                        <label class="block text-sm text-gray-600" for="slug">URL</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="slug" name="slug" type="text" required="" placeholder="Url поста" aria-label="Slug" value="{{ old('slug') }}">
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
                        <div class="relative w-full">
                            <div class="pb-1">
                                <span 
                                    class="inline-block rounded-md text-white bg-purple-700 px-2 py-1 text-xs font-bold mr-3 cursor-pointer select-all">
                                    Выбрать все
                                </span>
                                <span 
                                    class="inline-block rounded-md text-white bg-purple-700 px-2 py-1 text-xs font-bold mr-3 cursor-pointer deselect-all">
                                    Очистить
                                </span>
                            </div>
                            <select 
                                class="select2{{ $errors->has('tags') ? ' is-invalid' : '' }} w-full text-gray-600 bg-gray-200 rounded appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10"
                                name="tags[]"
                                id="tags"
                                multiple="multiple">
                            @foreach ($tags as $id => $tag)
                                <option value="{{ $id }}"
                                    {{ in_array($id, old('tags', [])) ? 'selected' : ''}}>
                                    {{ $tag}}
                                </option>
                            @endforeach
                            </select>
                            @if($errors->has('tags'))
                                <p class="invalid-feedback">{{ $errors->first('tags') }}</p>
                            @endif
                            <span class="block"></span>
                            {{-- <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"></path></svg>
                            </span> --}}
                        </div>
                        {{-- @foreach ($tags as $tag)
                            <label for="tag{{ $tag->id }}" class="inline-flex items-center mr-3 wrap">
                                <input type="checkbox" name="tags[]" id="tag{{ $tag->id }}" class="h-4 w-4 text-purple-600" value="{{ $tag->id }}"><span class="text-sm ml-1 text-gray-700">{{ $tag->name }}</span>
                            </label>    
                        @endforeach --}}
                    </div>
                    
                    <div class="mt-5">
                        <label class="block text-sm text-gray-600" for="slug">Описание</label>
                        <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded leading-normal" id="description" name="description" rows="3" required="" placeholder="" aria-label="Description">{{ old('description') }}</textarea>
                    </div>

                    <div class="mt-5">
                        <label class="block text-sm text-gray-600" for="feature_image">Картинка поста</label>
                        <input type="text" class="w-1/2 px-5 py-1 mr-2 text-gray-700 bg-gray-200 rounded" id="feature_image" name="image" value="">
                        <a href="" class="popup_selector px-4 py-1 text-white font-light tracking-wider bg-purple-700 hover:bg-green-500 rounded" data-inputid="feature_image">Выбрать</a>
                        <img src="" class="image-uploaded w-1/2 block py-2" alt="">
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('editor')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.6.1/jodit.min.css"/>
    <link href="{{ asset('/css/colorbox.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/7oc5a4pw1zhkloaxzcp0owb2if5b7vw0wbam8avvv26u7usu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/jquery.colorbox-min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
    <script src="{{ asset('/js/admin.js') }}"></script>
    <script>
        $('.select-all').click(function () {
            let $select2 = $(this).parent().siblings('.select2')
            $select2.find('option').prop('selected', 'selected')
            $select2.trigger('change')
          })
          $('.deselect-all').click(function () {
            let $select2 = $(this).parent().siblings('.select2')
            $select2.find('option').prop('selected', '')
            $select2.trigger('change')
          })
        
          $('.select2').select2()
        </script>
@endpush