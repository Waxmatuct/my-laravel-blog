@extends('dashboard.layouts.base')

@section('content')

<h1 class="text-2xl font-bold text-black pb-6">Настройки сайта</h1>

@include('dashboard.includes.message')

    <div class="w-full mt-6" x-data="{ openTab: 1 }">
        <div>
            <ul class="flex border-b">
                <li class="-mb-px mr-1" @click="openTab = 1">
                    <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Общие</a>
                </li>
                <li class="mr-1" @click="openTab = 2">
                    <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Соцсети</a>
                </li>
                {{-- <li class="mr-1" @click="openTab = 3">
                    <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 3</a>
                </li>
                <li class="mr-1" @click="openTab = 4">
                    <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 4</a>
                </li> --}}
            </ul>
        </div>
        <div class="bg-white p-6">
            <div id="" class="" x-show="openTab === 1">
               
                @foreach ($site_name as $name)
                <form action="{{ route('settings.update', $name) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="md:w-1/3 sm:mr-5 mb-5">
                        <label class="block text-sm text-gray-600" for="title">Название сайта</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="option{{ $name->id}}" name="option" type="text" required="" placeholder="Название сайта"
                        value="{{ $name->option }}"
                        onfocusout="event.preventDefault(); document.getElementById('option{{ $name->id}}'); form.submit();">
                    </div>
                </form>
                @endforeach
                
                @foreach ($site_description as $desc)
                <form action="{{ route('settings.update', $desc) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="md:w-1/3 sm:mr-5 mb-5">
                        <label class="block text-sm text-gray-600" for="title">Описание</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="option{{ $desc->id}}" name="option" type="text" required="" placeholder="Описание сайта"
                            value="{{ $desc->option }}"
                            onfocusout="event.preventDefault(); document.getElementById('option{{ $desc->id}}'); form.submit();">
                    </div>
                </form>
                @endforeach

                @foreach ($site_footer as $foot)
                <form action="{{ route('settings.update', $foot) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="md:w-2/3 sm:mr-5 mb-5">
                        <label class="block text-sm text-gray-600" for="title">Футер</label>
                        <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="option{{ $foot->id}}" name="option" rows="12">{{ $foot->option }}</textarea>
                        <div class="mt-6">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-purple-700 hover:bg-green-500 rounded" type="submit">Сохранить</button>
                        </div>
                    </div>
                </form>
                @endforeach

            </div>
            <div id="" class="" x-show="openTab === 2">
                @foreach ( $site_name as $name )
                <span>{{ $name->id }}</span>
                @endforeach

                @foreach ( $site_description as $description )
                <span>{{ $description->id }}</span>
                @endforeach
            </div>
            {{-- <div id="" class="" x-show="openTab === 3">
                Duis imperdiet ullamcorper nibh, sed euismod dolor facilisis sit amet. Etiam quis cursus lorem. Vivamus euismod accumsan neque lobortis tempus. Praesent nec lacinia odio, a dictum risus. Sed eget dictum turpis, vitae iaculis orci. Vivamus laoreet consequat velit, non viverra diam pulvinar a. Aliquam bibendum ligula lacus, ac convallis ipsum hendrerit ut. Suspendisse rutrum dui libero, non aliquam lectus lobortis at. Donec gravida finibus sollicitudin. Nulla ut metus finibus purus vehicula porttitor. Fusce id sem non nisl pulvinar scelerisque.
            </div>
            <div id="" class="" x-show="openTab === 4">
                Mauris viverra viverra dolor quis gravida. Duis pharetra felis id tellus faucibus pulvinar. Integer non ligula lobortis, hendrerit est eget, maximus sapien. Suspendisse vel nibh feugiat, porta ex et, dignissim diam. Maecenas finibus consectetur efficitur. Sed tempus vehicula interdum. Nam porttitor id risus a ultrices. Proin mi nulla, ultricies eu ipsum vitae, fermentum congue nunc. Phasellus a dictum massa. Nunc quis lacus et ex vulputate molestie ac eget est. Integer porttitor placerat quam, eu convallis sem tristique sit amet. Nam at risus fringilla, pharetra mauris tincidunt, imperdiet nisi.
            </div> --}}
        </div>
    </div>
@endsection
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