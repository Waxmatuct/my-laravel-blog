<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <div x-data="{ isOpen: false }" class="relative flex justify-center mb-3">
            <button @click="isOpen = !isOpen"
                class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                <img src="{{ asset('/assets/images/avatar.jpg') }}">
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                {{-- <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a> --}}
                <a href="{{ route('logout') }}" class="block px-4 py-2 account-link hover:text-white" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        <a href="{{ route('blog') }}"
            class="text-center block text-white text-2xl font-semibold hover:text-gray-300">На сайт</a>
        <a href="{{ route('posts.create') }}"
            class="w-full bg-green-500 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-green-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Новый пост
        </a>
        <a href="{{ route('categories.create') }}"
            class="w-full bg-green-500 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-green-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Новая категория
        </a>
        <a href="{{ route('tags.create') }}"
            class="w-full bg-green-500 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-green-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Новый тег
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex items-center opacity-75 text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        {{-- <a href="{{ route('dashboard-blank') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a> --}}
        <a href="{{ route('posts.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Посты
        </a>

        <a href="{{ route('comments.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-comments mr-3"></i>
            Комменты
        </a>
        {{-- <a href="{{ route('dashboard-forms') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a> --}}
        {{-- <a href="{{ route('settings.index') }}"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-cogs mr-3"></i>
            Настройки
        </a> --}}
        <p class="py-4 pl-6">PHP @php
            echo phpversion();
        @endphp</p>
    </nav>
</aside>
