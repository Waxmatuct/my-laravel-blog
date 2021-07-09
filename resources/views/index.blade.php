@extends('layouts.default')

@section('title', env('APP_NAME') .' | ' .env('APP_DESCR'))

@section('content')

<main id="site-main" class="site-main">
		
		{{-- <nav class="site-nav flex mx-auto mb-5">
			
				<ul class="flex flex-wrap uppercase space-x-3">
					<li>
						<a class="menu-item {{ request()->is('blog') ? 'active' : null }}" href="{{ url('/blog') }}">Блог</a>
					</li>
					<li>
						<a class="menu-item {{ request()->is('projects') ? 'active' : null }}" href="{{ url('/projects') }}">Проекты</a>
					</li>
				</ul>
					
		</nav> --}}

		<div class="main-content flex flex-wrap space-y-4 text-lg leading-snug">
			<p>
				Разрабатываю веб-сайты под различные нужды от блогов до справочных ресурсов. Работаю в редакционно-издательском центре Сочинского государственного университета. 
			</p>
			<div class="text-center w-full">
				<a href="{{ url('/blog') }}">Блог</a> • <a href="{{ url('/projects') }}">Проекты</a> • <a href="mailto:pletnevsochi@yandex.ru">pletnevsochi@yandex.ru</a> • <a href="https://t.me/alvar_ru">@alvar_ru</a>
			</div>
			
		</div>

</main>
@endsection