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
				document.getElementById('switchTheme').checked = true;
				} else {
				document.documentElement.classList.remove('dark');
				localStorage.removeItem('theme');
				document.getElementById('switchTheme').checked = false;
				}		
		</script>
	</head>
	<body class="bg-light text-black font-sans dark:bg-dark-lighter dark:text-gray">
		<a href="#" onclick="return false" class="menu_link"><span></span></a>

		<div class="container mx-auto max-w-2xl">

			<div class="flex justify-center p-2.5">
				@include('includes.switcher')
			</div>
			
			<div class="site-header-content flex flex-col justify-center mt-5 mb-3 items-center">
				
				<img class="site-avatar w-36 h-36 rounded-3xl mb-4 border-light-gray dark:border-dark" src="{{ asset('/assets/images/Alvar.jpg') }}">
				
				<h1 class="site-title font-bold text-3xl sm:text-4xl text-black dark:text-light-white">
					{{ config('app.name') }}
				</h1>
				
				<h2 class="site-description text-black dark:text-gray font-normal my-2.5">
					{{ config('app.description') }}
				</h2>

				{{-- <div class="subscribe hidden">
					<a href="" class="sub_btn">Подписаться</a>
				</div> --}}

				<div class="bg-primary-darker dark:bg-primary block mx-auto w-12 h-1 my-3"></div>
				
			</div>

                
            @yield('content')

		</div>

		@include('includes.footer')

		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
		<script src="{{ asset('/js/scripts.js') }}"></script>
	</body>
</html>