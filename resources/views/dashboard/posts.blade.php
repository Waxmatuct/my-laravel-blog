@extends('dashboard.layouts.base')

@section('title', 'Админка: Посты')

@section('content')
<h1 class="text-2xl font-bold text-black pb-6">Посты</h1>

@include('dashboard.includes.message')

{{ $posts->links('vendor.pagination.tailwind') }}
<div class="w-full mt-6">
    <div class="bg-white shadow-md rounded-lg overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-500 text-white">
                <tr>
                    <th class="min-w-min text-center py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Заголовок</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">URL</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Категория</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Теги</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Картинка</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Дата</td>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Статус</td>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Правка</td>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Удалить</td>    
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($posts as $post)
                <tr @if ($loop->even) class="bg-gray-200" @endif>
                    <td class="min-w-min text-center py-3 px-4">{{$post->id}}</td>
                    <td class="text-center py-3 px-4"><a class="hover:text-green-400" href="{{ route('getPost', $post->slug) }}">{{$post->title}}</a></td>
                    <td class="text-center py-3 px-4">{{$post->slug}}</td>
                    <td class="text-center py-3 px-4">{{$post->category['title']}}</td>
                    <td class="text-center py-3 px-4">
                        @foreach ($post->tags as $tag)
                        <span class="inline-block rounded-min text-white bg-purple-500 px-2 py-1 text-xs font-bold mr-3">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td class="text-center py-3 px-4">
                        <img src="{{$post->image}}" alt="" class="m-auto" style="max-width: 50px">
                    </td>
                    <td class="text-center py-3 px-4">{{$post->created_at->isoFormat('D MMMM  YYYY')}}</td>
                    <td class="text-center py-3 px-4">
                        <form id="online-form{{ $post->id}}" action="{{ route('online', $post) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <label class="switch">
                                <input type="checkbox"
                                    name="online"
                                    @if ($post->online) checked @endif
                                    onclick="document.getElementById('online-form{{ $post->id}}').submit();" value="1">
                                <span class="slider round"></span>
                            </label>

                        </form>
                    </td>
                    <td class="text-center py-3 px-4"><a href="{{ route('posts.edit', $post) }}" class="text-xs px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full">
                        <i class="fas fa-pen mr-2"></i>Правка</a>
                    </td>
                    <td class="text-center py-3 px-4">
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
                                <button class="delete-btn text-xs px-3 py-1 bg-red-600 text-gray-50 rounded-full" @click="showModal = true" type="button">
                                    <i class="fas fa-trash mr-2"></i>Удалить
                                </button>

                                <!--Overlay-->
                                <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
                                    <!--Dialog-->
                                    <div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

                                        <!--Title-->
                                        <div class="flex justify-between items-center pb-3">
                                            <p class="text-2xl font-bold">Удалить пост?</p>
                                            <div class="cursor-pointer z-50" @click="showModal = false">
                                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                                </svg>
                                            </div>
                                        </div>

                                        <!-- content -->
                                        {{-- <p>Удалить пост?</p> --}}

                                        <!--Footer-->
                                        <div class="flex justify-end pt-2">
                                            <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" type="submit">Удалить</button>
                                            <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400" type="button" @click="showModal = false">Нет</button>
                                        </div>
                                    </div>
                                    <!--/Dialog -->
                                </div><!-- /Overlay -->
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('switch')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 36px;
            height: 20px;
        }

        .switch input { 
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #10b981;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #10b981;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(16px);
            -ms-transform: translateX(16px);
            transform: translateX(16px);
        }
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endpush
@push('scripts')
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>
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