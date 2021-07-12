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

		@include('includes.navigation')

		<div class="container mx-auto">

           @yield('content')

		</div>

		@include('includes.footer')
		
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
		<script src="{{ asset('/js/scripts.js') }}"></script>
		<script>
			document.getElementById('showNav').addEventListener('click', function() {

				var menu = document.getElementById('menu').classList;

				if (menu.contains('hidden')) {

				menu.remove('hidden');

				} else {

				menu.add('hidden');

				}

			});
		</script>
		@stack('fade')
	</body>
	
</html>