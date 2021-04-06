@extends('dashboard.layouts.base')

@section('title', 'Админка: Посты')

@section('content')
<h1 class="text-2xl font-bold text-black pb-6">Посты</h1>

@include('dashboard.includes.message')

<div class="w-full mt-6">
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white border-2">
            <thead class="bg-gray-500 text-white">
                <tr>
                    <th class="min-w-min text-center py-3 px-4 uppercase font-semibold text-sm">ID</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Заголовок</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">URL</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Категория</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Теги</th>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Дата создания</td>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Правка</td>
                    <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Удалить</td>    
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($posts as $post)
                <tr class="border-2">
                    <td class="min-w-min text-center py-3 px-4">{{$post->id}}</td>
                    <td class="text-center py-3 px-4">{{$post->title}}</td>
                    <td class="text-center py-3 px-4">{{$post->slug}}</td>
                    <td class="text-center py-3 px-4">{{$post->category['title']}}</td>
                    <td class="text-center py-3 px-4">
                        @foreach ($post->tags as $tag)
                        <span class="inline-block rounded-min text-white bg-purple-500 px-2 py-1 text-xs font-bold mr-3">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td class="text-center py-3 px-4">{{$post->created_at}}</td>
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
    {{-- {{ $posts->links('vendor.pagination.semantic-ui') }} --}}
</div>
@endsection
@push('scripts')
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
@endpush