@extends('layouts.default')

@section('title', $site_name.' | '.$site_description)

@section('content')

<main id="site-main" class="site-main">
		
		<nav class="site-nav flex mx-auto ">
			
				<ul class="flex flex-wrap uppercase space-x-3">
					<li>
						<a class="menu-item {{ request()->is('blog') ? 'active' : null }}" href="{{ url('/blog') }}">Блог</a>
					</li>
					<li>
						<a class="menu-item {{ request()->is('projects') ? 'active' : null }}" href="{{ url('/projects') }}">Проекты</a>
					</li>
				</ul>
					
		</nav>

</main>
@endsection