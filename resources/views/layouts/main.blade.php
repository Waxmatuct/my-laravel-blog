<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="/css/app.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i|Roboto+Slab:300,700|Roboto:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
		<script src="https://kit.fontawesome.com/01555a23fc.js" crossorigin="anonymous"></script>
		{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
	</head>
	<body class="">
		<progress value="0">
			<div class="progress-container">
				<span class="progress-bar"></span>
			</div>
		</progress>
		<div class="site-wrapper">
			<header class="site-home-header">
				<div class="header-inner">					
					<div class="site-header-content">
						<h1 class="site-title">							
							<a href="/">alvar</a>
						</h1>
						<h2 class="site-description">Блог веб-дизайнера</h2>
						<div class="social-links">
							<a class="social-link social-link-telegram" href="" title="Telegram" target="_blank" rel="noopener"></a>
							<a class="social-link social-link-tw" href="" title="Twitter" target="_blank" rel="noopener"></a>
							<a class="social-link social-link-fb" href="" title="Facebook" target="_blank" rel="noopener"></a>
							<a class="social-link social-link-insta" href="" title="Instagram" target="_blank" rel="noopener"></a>
						</div>
						<div class="subscribe">
							<a href="" class="sub_btn">Подписаться</a>
						</div>
					</div>
					<nav class="site-nav">						
						<div class="site-nav-content">
							<a href="#" onclick="return false" class="menu_link"><span></span></a>								
							<ul>
								<li><a href="">Тэги</a></li>
								<li><a href="">Пост</a></li>
								<li><a href="">Страница</a></li>
							</ul>									
						</div>							
					</nav>
				</div>
			</header>
                
            @yield('content')

			<footer class="site-footer">
				<div class="inner underline">
					<section class="credits">
						<span class="credits-theme">Дизайн: Alvar</span>
						<span class="credits-software">Движок: Ghost</span>
					</section>
				</div>
			</footer>
		</div>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="/assets/javascript/scripts.js"></script>

	</body>
</html>