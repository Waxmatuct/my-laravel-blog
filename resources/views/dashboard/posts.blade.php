@extends('dashboard.layouts.base')

@section('title', 'Админка: Посты')

@section('content')
<h1 class="text-3xl text-black pb-6">Посты</h1>

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
                    <td class="text-center py-3 px-4">{{$post->created_at}}</td>
                    <td class="text-center py-3 px-4"><a href="" class="text-xs px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full">
                        <i class="fas fa-pen mr-2"></i>Правка</a>
                    </td>
                    <td class="text-center py-3 px-4">
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="delete-btn text-xs px-3 py-1 bg-red-600 text-gray-50 rounded-full" type="submit">
                                <i class="fas fa-trash mr-2"></i>Удалить
                            </button>
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
    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            // $(".nav-treeview .nav-link, .nav-link").each(function () {
            //     var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
            //     var link = this.href;
            //     if(link == location2){
            //         $(this).addClass('active');
            //         $(this).parent().parent().parent().addClass('menu-is-opening menu-open');

            //     }
            // });

            $('.delete-btn').click(function () {
                var res = confirm('Подтвердите действия');
                if(!res){
                    return false;
                }
            });
        })
    </script>
@endpush