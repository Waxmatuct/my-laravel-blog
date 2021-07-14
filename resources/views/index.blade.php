@extends('layouts.default')

@section('title', env('APP_NAME') .' | ' .env('APP_DESCR'))

@section('content')

<main id="site-main" class="site-main">
		
		<div class="main-content flex flex-col flex-wrap space-y-7 text-lg leading-snug">
			<div id="info" class="flex flex-col space-y-4">
				<p>
					Разрабатываю веб-сайты под различные нужды от блогов до справочных ресурсов. Работаю в редакционно-издательском центре Сочинского государственного университета.
				</p>
				<div class="text-center">
					<a href="{{ url('/blog') }}">Блог</a> • <a href="mailto:pletnevsochi@yandex.ru">pletnevsochi@yandex.ru</a> • <a href="https://t.me/alvar_ru">@alvar_ru</a>
				</div>
			</div>
			<div id="sites" class="flex flex-col space-y-4">
				<h2 class="text-2xl font-bold">Веб-сайты</h2>
				<p><a href="https://izd.sutr.ru" target="_blank">izd.sutr.ru</a> — сайт редакционно-издательского центра ФГБОУ ВО «Сочинский государственный университет». Основная задача — помощь авторам в издании научных трудов и ведение статистики по выполнению годового плана издания учебной и учебно-методической литературы.</p>
				<p><a href="https://kvartalsveta.ru" target="_blank">kvartalsveta.ru</a> — сайт проекта «Квартал света», который направлен на формирование современной общественной зоны притяжения в центре города Пушкин.</p>
				<p><a href="{{ url('/') }}" target="_blank">alvar.ru</a> — мой персональный сайт-портфолио и авторский блог.</p>
				<p><a href="https://templeofdeath.org" target="_blank">templeofdeath.org</a> — авторский интернет-журнал на русском и английском об экстремальной музыке. Создан для публикации интервью, статей, музыкальных обзоров и рецензий.</p>
				<p><a href="https://alvheim.ru" target="_blank">alvheim.ru</a> — одностраничный сайт о музыкальной группе.</p>
				<p><a href="https://pro-rs.ru" target="_blank">pro-rs.ru</a> — авторский блог Александры Ясинской.</p>
			</div>
			<div id="design" class="flex flex-col space-y-4">
				<h2 class="text-2xl font-bold">Полиграфия, дизайн, верстка</h2>
				<p><a href="#" target="_blank">Газета «Сочинский университет»</a></p>
				<p><a href="#" target="_blank">Журнал «Сочинский государственный университет» (факты, события, комментарии)</a></p>
			</div>

		</div>

</main>
@endsection