@extends('layouts.main')

@section('title', 'My Blog')

@section('content')
<main id="site-main" class="site-main">
	<div class="inner">
		<article class="post">
			<header class="post-header">
				<h2 class="post-title"><a href="">Какой-то заголовок второй записи в 2 и более строки</a></h2>
			</header>
			<section class="post-excerpt"><p>Статистика программного анализа играющего белыми кроме 16-го и 21-го ходов указывает на применение программного обеспечения. Просматривая партию с человеческой точки зрения убеждаешься, что большинство ходов напрашивающиеся, или сделаны в составе форсированной игры с 21-го по 24-й ходы. Вопросы в «человечности» у меня вызывают 16-й и 17-й ходы белых. </p>
			</section>
			<div class="meta">
				<span class="post-date">
					<time datetime="2019-11-29">29 нояб. 2019</time>
				</span>
				<span class="post-tag"><a href="">всякая дурь</a></span>
			</div>
			<!-- <div class="line"></div> -->
		</article>
		<article class="post">
			<header class="post-header">
				<h2 class="post-title"><a href="">Какой-то заголовок второй записи</a></h2>
			</header>
			<section class="post-excerpt"><p>Статистика программного анализа играющего белыми кроме 16-го и 21-го ходов указывает на применение программного обеспечения. Просматривая партию с человеческой точки зрения убеждаешься, что большинство ходов напрашивающиеся, или сделаны в составе форсированной игры с 21-го по 24-й ходы. Вопросы в «человечности» у меня вызывают 16-й и 17-й ходы белых. </p></section>
			<div class="meta">
				<span class="post-date">
					<time datetime="2019-11-29">29 нояб. 2019</time>
				</span>
				<span class="post-tag"><a href="">всякая дурь</a></span>
			</div>
		</article>
		<article class="post">
			<header class="post-header">
				<h2 class="post-title"><a href="">Какой-то заголовок второй записи в 2 и более строки</a></h2>
			</header>
			<section class="post-excerpt"><p>Статистика программного анализа играющего белыми кроме 16-го и 21-го ходов указывает на применение программного обеспечения. Просматривая партию с человеческой точки зрения убеждаешься, что большинство ходов напрашивающиеся, или сделаны в составе форсированной игры с 21-го по 24-й ходы. Вопросы в «человечности» у меня вызывают 16-й и 17-й ходы белых. </p></section>
			<div class="meta">
				<span class="post-date">
					<time datetime="2019-11-29">29 нояб. 2019</time>
				</span>
				<span class="post-tag">
					<a href="">всякая дурь</a>
					<a href="">другая дурь</a>
				</span>
			</div>
			<!-- <div class="line"></div> -->
		</article>
	</div>
	
	<div class="pagination" role="pagination">
		<a class="newer-posts" href="/">Новые записи</a>
		<span class="pagination-info">Страница 2 из 3</span>
		<a class="older-posts" href="/page/3/">Предудыщие записи</a>
	</div>
</main>
@endsection