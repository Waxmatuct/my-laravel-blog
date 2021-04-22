<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>@yield('title')</title>
		<script src="{{ asset('js/app.js') }}" defer></script>
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i|Roboto:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
		<script src="https://kit.fontawesome.com/01555a23fc.js" crossorigin="anonymous"></script>
	</head>
	<body class="bg-dark font-sans text-gray">
		<a href="#" onclick="return false" class="menu_link"><span></span></a>
		<progress value="0">
			<div class="progress-container">
				<span class="progress-bar"></span>
			</div>
		</progress>
		<div class="max-w-6xl mx-auto">
			<header class="site-home-header relative">
				<div class="site-header-content flex flex-col justify-center items-center">
					<a href="/blog">
						<img class="site-avatar w-28 h-28 border-6 border-dark-lighter rounded-full mb-4" src="{{ asset('/assets/images/logo.jpg') }}">
					</a>
					<h1 class="site-title font-bold text-5xl uppercase tracking-widest">
						@forelse ( $site_name as $name )
							<a class="text-light-gray transition duration-500 ease-in-out hover:text-gray" href="{{ route('login') }}">{{ $name->option }}</a>

							@empty <a class="text-light-gray transition duration-500 ease-in-out hover:text-gray" href="{{ route('login') }}">alvar</a>
							
						@endforelse
					</h1>
					@forelse ( $site_description as $desc )
						<h2 class="site-description font-normal my-2.5">{{ $desc->option }}</h2>
					
						@empty <h2 class="site-description">Простой блог на Laravel</h2>
				
					@endforelse
					<div class="social-links block my-2.5">
						<a class="social-link text-telegram mr-2.5" href="#" title="Telegram" target="_blank" rel="noopener"><i class="fab fa-telegram-plane"></i></a>
						<a class="social-link text-twitter mr-2.5" href="#" title="Twitter" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
						<a class="social-link text-facebook mr-2.5" href="#" title="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a>
						<a class="social-link text-insta" href="#" title="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
					</div>
					<div class="subscribe hidden">
						<a href="" class="sub_btn">Подписаться</a>
					</div>
				</div>
				@include('includes.navigation__')
			</header>
                
            @yield('content')

			<footer class="site-footer">
				<div class="inner underline">
					@forelse ( $site_footer as $foot )
					
					{!! $foot->option !!}
						
						@empty 
						<div class="inner underline">
							<section class="credits">
								<span class="credits-theme">Дизайн: Alvar</span>
								<span class="credits-software">Движок: Ghost</span>
							</section>
						</div>
					
					@endforelse
				</div>
			</footer>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/scripts.js') }}"></script>
	</body>
</html>