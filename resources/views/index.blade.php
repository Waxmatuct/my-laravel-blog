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
			<p><a href="{{ url('/blog') }}">Блог</a> • <a href="{{ url('/projects') }}">Проекты</a></p>
			<p>
				Работаю в редакционно-издательском центре Сочинского государственного университета. Разрабатываю для авторов университета информационно-справочный ресурс, который помогает авторам отслеживать...  
			</p>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis error pariatur ab voluptate ipsum, autem doloribus? Quidem debitis dicta rem, obcaecati, magni ut expedita tempora culpa vel laborum reiciendis. Molestiae.</p>
			<p>Sapiente vitae voluptate natus nostrum deleniti, rem libero reprehenderit laboriosam neque tenetur, officia, sequi placeat optio. Iste deserunt minima blanditiis ea in. Autem velit maiores culpa dolor libero enim est!</p>
			<p>Ipsam voluptate distinctio, sed repellat inventore blanditiis pariatur sit, commodi delectus earum et quas? Necessitatibus, molestiae fuga? Doloremque animi magnam dolorum quam, exercitationem asperiores quisquam deleniti, inventore ea earum esse.</p>
			<p>Laboriosam qui autem quis ipsa nesciunt possimus pariatur, error iusto rem quasi quam ea, ad minima placeat sint, officia sunt natus? Nostrum voluptate accusamus nisi repellendus! Atque reiciendis eius maiores?</p>
			<p>Impedit laboriosam earum excepturi quod eveniet? Consequuntur ullam, necessitatibus natus adipisci quisquam esse dolor quidem consectetur eveniet provident aliquam doloremque non cum. Quasi dignissimos earum ducimus cupiditate? Tempore, quia cupiditate.</p>	
		</div>

</main>
@endsection