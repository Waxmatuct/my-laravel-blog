// $(document).ready(function(){
// 	$(".menu_link").click(function() {
// 		$(".menu_link").toggleClass("menu_link_active");
// 		$(".site-nav-content ul").toggleClass("menu_active");
// 	});

//     $(function() {
//     $(window).on("scroll resize", function() {
//         var o = $(window).scrollTop() / ($(document).height() - $(window).height());
//         $(".progress-bar").css({
//             "width": (100 * o | 0) + "%"
//         	});
//         $('progress')[0].value = o;
//     	})
//     });
// });

document.getElementById('switchTheme').addEventListener('click', function() {
		
	let htmlClasses = document.querySelector('html').classList;

	if (localStorage.theme == 'dark') {

		htmlClasses.remove('dark');

		localStorage.removeItem('theme')
		
		this.checked = false

	} else {

		htmlClasses.add('dark');

		localStorage.theme = 'dark'

		this.checked = true

	}

});

document.getElementById('showNav').addEventListener('click', function() {
		
	var menu = document.getElementById('menu').classList;

	if (menu.contains('hidden')) {

		menu.remove('hidden');

	} else {

		menu.add('hidden');

	}

});