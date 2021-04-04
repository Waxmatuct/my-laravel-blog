<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ route('index') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">На сайт</a>
        <a href="{{ route('posts.create') }}" class="w-full bg-green-500 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-green-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Новый пост
        </a>
        <a href="{{ route('categories.create') }}" class="w-full bg-green-500 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-green-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> Новая категория
        </a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('dashboard-blank') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Blank Page
        </a>
        <a href="{{ route('dashboard-posts') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Посты
        </a>
        <a href="{{ route('dashboard-forms') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="{{ route('dashboard-tabs') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="{{ route('dashboard-calendar') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a>
    </nav>
</aside>