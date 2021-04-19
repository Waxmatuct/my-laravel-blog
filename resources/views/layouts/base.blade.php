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
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i|Roboto+Slab:300,700|Roboto:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
		<script src="https://kit.fontawesome.com/01555a23fc.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<a href="#" onclick="return false" class="menu_link"><span></span></a>
		<progress value="0">
			<div class="progress-container">
				<span class="progress-bar"></span>
			</div>
		</progress>
		<div class="site-wrapper">
			<header class="site-home-header">
				<div class="header-inner">					
					<div class="site-header-content">
						<a href="/">
							<img class="site-avatar" src="{{ asset('/assets/images/logo.jpg') }}">
						</a>
						<h1 class="site-title">
							@forelse ( $site_name as $name )
								<a href="{{ route('login') }}">{{ $name->option }}</a>

								@empty <a href="{{ route('login') }}">alvar</a>
								
							@endforelse
						</h1>
						@forelse ( $site_description as $desc )
							<h2 class="site-description">{{ $desc->option }}</h2>
						
							@empty <h2 class="site-description">Простой блог на Laravel</h2>
					
						@endforelse
						<div class="social-links">
							<a class="social-link social-link-telegram" href="#" title="Telegram" target="_blank" rel="noopener"></a>
							<a class="social-link social-link-tw" href="#" title="Twitter" target="_blank" rel="noopener"></a>
							<a class="social-link social-link-fb" href="#" title="Facebook" target="_blank" rel="noopener"></a>
							<a class="social-link social-link-insta" href="#" title="Instagram" target="_blank" rel="noopener"></a>
						</div>
						<div class="subscribe">
							<a href="" class="sub_btn">Подписаться</a>
						</div>
					</div>
					@include('includes.navigation')
				</div>
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