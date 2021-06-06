@extends('layouts.default')

@section('title', $site_name.' | '.$site_description)

@section('content')

<main id="site-main" class="site-main">
	<div class="index-page mx-auto md:my-8 my-5 w-full flex md:flex-row justify-around">
		
		<div class="lg:w-2/5 w-full mb-10 lg:mb-0">
			<img alt="feature" class="object-cover object-bottom " src="{{ asset('/assets/images/alvar.jpg') }}">
		</div>
		
		<div class="flex flex-col flex-wrap lg:w-3/5 lg:pl-12 lg:text-left text-center" x-data="{ openTab: 1 }">

			<div>
				<ul class="flex border-b border-primary dark:border-primary-darker">
					<li class="-mb-px mr-1" @click="openTab = 1">
						<a :class="openTab === 1 ? 'border-l border-t border-r rounded-t font-semibold' : 'hover:text-blue-800'" class="inline-block py-2 px-4 font-semibold" href="#">Обо мне</a>
					</li>
					<li class="mr-1" @click="openTab = 2">
						<a :class="openTab === 2 ? 'border-l border-t border-r rounded-t font-semibold' : 'hover:text-blue-800'" class="inline-block py-2 px-4 font-semibold" href="#">Проекты</a>
					</li>
					<li class="mr-1" @click="openTab = 3">
						<a :class="openTab === 3 ? 'border-l border-t border-r rounded-t font-semibold' : 'hover:text-blue-800'" class="inline-block py-2 px-4 font-semibold" href="#">Контакты</a>
					</li>
				</ul>
			</div>
			
			<div class="py-6">
				<div id="" class="" x-show="openTab === 1">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus ligula at condimentum sagittis. Maecenas velit libero, fermentum a leo quis, pretium egestas risus. Proin tempus sem magna, vitae convallis purus rhoncus non. Aenean tristique congue metus in lobortis. Nullam nisi leo, luctus in sapien eget, accumsan mattis leo. Morbi magna dolor, dapibus ut ligula eget, commodo venenatis risus. Nunc quis dignissim velit. Donec nec dapibus ligula. Etiam quis libero ultrices, semper arcu id, suscipit purus. Phasellus eu arcu tincidunt dui pellentesque feugiat et at risus. In hendrerit laoreet ante ac imperdiet. Nam tortor urna, laoreet in malesuada quis, pretium cursus dolor.
				</div>
				<div id="" class="" x-show="openTab === 2">
					Curabitur at lacinia felis. Curabitur elit ante, efficitur molestie iaculis non, blandit dictum dui. Fusce ac faucibus lorem, in aliquet metus. Praesent bibendum justo vitae ante imperdiet, sit amet posuere tortor tincidunt. Nam a arcu eros. In vitae augue tempus, ullamcorper lectus ut, egestas erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean imperdiet eget sapien nec consequat. Etiam imperdiet diam ac mattis gravida.
				</div>
				<div id="" class="" x-show="openTab === 3">
					Duis imperdiet ullamcorper nibh, sed euismod dolor facilisis sit amet. Etiam quis cursus lorem. Vivamus euismod accumsan neque lobortis tempus. Praesent nec lacinia odio, a dictum risus. Sed eget dictum turpis, vitae iaculis orci. Vivamus laoreet consequat velit, non viverra diam pulvinar a. Aliquam bibendum ligula lacus, ac convallis ipsum hendrerit ut. Suspendisse rutrum dui libero, non aliquam lectus lobortis at. Donec gravida finibus sollicitudin. Nulla ut metus finibus purus vehicula porttitor. Fusce id sem non nisl pulvinar scelerisque.
				</div>
			</div>

		</div>

	</div>

</main>
@endsection