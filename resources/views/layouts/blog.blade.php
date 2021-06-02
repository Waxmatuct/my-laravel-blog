<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>@yield('title')</title>
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
		<script>
			if (localStorage.theme === 'dark') {
				document.documentElement.classList.add('dark')
				localStorage.theme = 'dark';
			} else {
				document.documentElement.classList.remove('dark');
				localStorage.removeItem('theme');
			}
		</script>
		@stack('recaptcha')
	</head>
	<body class="bg-light text-black font-sans dark:bg-dark-lighter dark:text-gray">
		<a href="#" onclick="return false" class="menu_link"><span></span></a>

		@include('blog.includes.navigation')

		<div class="container mx-auto">
			<header class="site-home-header block md:hidden">
				<div class="site-header-content flex flex-col justify-center mt-5 mb-3 items-center">
					<a href="/">
						<img class="site-avatar w-28 h-28 border-6 rounded-full mb-4 border-light-gray dark:border-dark-lighter hover:border-primary dark:hover:border-primary transition duration-500 ease-in-out" src="{{ asset('/assets/images/logo.jpg') }}">
					</a>
					<h1 class="site-title font-bold text-5xl uppercase tracking-widest">
							@if ($site_name)
								<a class="text-primary-dark dark:text-primary hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">{{ $site_name }}</a>
							@else 
								<a class="text-primary-dark dark:text-primary hover:text-black dark:hover:text-light-gray" href="{{ url('/') }}">alvar</a>
							@endif
					</h1>
					
					@if ($site_description)
						<h2 class="site-description text-black dark:text-gray font-normal my-2.5">{{ $site_description }}</h2>
					@else
						<h2 class="site-description text-dark-gray dark:text-gray font-normal my-2.5">Простой блог на Laravel</h2>
					@endif

					<div class="subscribe hidden">
						<a href="" class="sub_btn">Подписаться</a>
					</div>
					<div class="bg-primary dark:bg-primary block mx-auto w-12 h-1 my-3"></div>
				</div>

			</header>
                
            @yield('content')

		</div>

		@include('blog.includes.footer')

	</body>
</html>