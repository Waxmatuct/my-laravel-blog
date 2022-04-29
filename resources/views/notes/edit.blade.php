@extends('layouts.blog')

@section('title', config('app.name') . ' | ' . config('app.description'))

@section('content')

    <div class="max-w-3xl md:mt-7 px-5 mx-auto md:px-0 mb-5 flex items-center space-x-5">
        <h1 class="text-4xl font-bold text-black dark:text-light-white">Редактировать</h1>
    </div>

    <main id="site-main" class="site-main">
        <div class="inner w-full sm:max-w-3xl mx-auto md:my-3 flex flex-col">

            <form action="{{ route('notes.update', $note) }}" method="POST" id="createPostForm">
                @csrf
                @method('PATCH')
                <div class="">
                    <label class="leading-7 block text-sm text-gray-600" for="title">Заголовок</label>
                    <input
                        class="w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary text-base outline-none text-black dark:text-light py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        id="title" name="title" type="text" aria-label="Title" value="{{ $note->title }}">
                </div>

                <div class="mt-5">
                    <label class="leading-7 block text-sm text-gray-600" for="message">Пост</label>
                    <div id="editor"
                        class="w-full bg-light-white dark:bg-dark rounded border border-light-white dark:border-dark focus:border focus:border-primary h-32 text-base outline-none text-black dark:text-light resize-y leading-6 transition-colors duration-200 ease-in-out"
                        name="content" rows="15" placeholder="" aria-label="Content">{!! \Str::markdown($note->content) !!}</div>
                    <input type="hidden" name="content" id="content">
                </div>

                <div class="mt-6">
                    <button class="button" type="submit">Сохранить</button>
                </div>
            </form>

        </div>

    </main>
@endsection

@push('editor')
    <script src="{{ mix('/js/editor.js') }}">
        import Editor from "@toast-ui/editor";
        // import "codemirror/lib/codemirror.css";
        import "@toast-ui/editor/dist/toastui-editor.css"; // Editor's Style
        import "@toast-ui/editor/dist/theme/toastui-editor-dark.css"; // Editor's Style

        const editor = new Editor({
            el: document.querySelector("#editor"),
            height: "500px",
            initialEditType: "markdown",
            initialValue: content,
            theme: "dark",
        });

        document.querySelector("#createPostForm").addEventListener("submit", (e) => {
            e.preventDefault();
            document.querySelector("#content").value = editor.getMarkdown();
            e.target.submit();
        });
    </script>
@endpush
