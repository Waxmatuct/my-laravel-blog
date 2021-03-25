@extends('layouts.admin')

@section('title', $post->title)

@section('content')
<div class="container mt-5">
    <h2>Редактирование поста «{{$post->title}}»</h2>
    <form>
        <div class="form-row">
            <div class="form-group col-6">
                <label for="exampleFormControlInput1">Заголовок</label>
                <input type="text" class="form-control" id="title" value="{{$post->title}}">
            </div>
            <div class="form-group col-6">
                <label for="exampleFormControlInput2">URL</label>
                <input type="text" class="form-control" id="url" value="{{$post->slug}}">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Описание</label>
            <textarea class="form-control" id="description" rows="4">
                {{$post->description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea">Пост</label>
            <textarea class="form-control" id="tiny" rows="18">
                {{$post->content}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
@endpush

@push('tinymce')
    <script src="https://cdn.tiny.cloud/1/7oc5a4pw1zhkloaxzcp0owb2if5b7vw0wbam8avvv26u7usu/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#tiny',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
       });
    </script>
@endpush
