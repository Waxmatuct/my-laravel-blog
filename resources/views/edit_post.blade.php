@extends('layouts.admin')

@section('title', $post->title)

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form method="POST" action="action.php">
                <div class="mb-4">
                    <label class="text-xl text-gray-600">Название <span class="text-red-500">*</span></label></br>
                    <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="{{$post->title}}" required></input>
                </div>

                <div class="mb-4">
                    <label class="text-xl text-gray-600">Url поста <span class="text-red-500">*</span></label></br>
                    <input type="text" class="border-2 border-gray-300 p-2 w-full" name="slug" id="slug" value="{{$post->slug}}" required></input>
                </div>

                <div class="mb-8">
                    <label class="text-xl text-gray-600">Описание</label></br>
                    <textarea name="description" class="form-textarea border-1 border-gray-300 p-2 w-full" rows="4">
                        {{$post->description}}
                    </textarea>
                </div>

                <div class="mb-8">
                    <label class="text-xl text-gray-600">Пост <span class="text-red-500">*</span></label></br>
                    <textarea id="tiny" name="content" class="border-2 border-gray-500" style="height:500px;">
                        {{$post->content}}
                    </textarea>
                </div>

                <div class="flex p-1">
                    <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Сохранить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    tinymce.init({
      selector: '#tiny',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
  </script>

@endsection