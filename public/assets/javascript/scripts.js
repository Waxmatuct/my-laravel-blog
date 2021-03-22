$(document).ready(function(){
	$(".menu_link").click(function() {
		$(".menu_link").toggleClass("menu_link_active");
		$(".site-nav-content ul").toggleClass("menu_active");
	});

	// $(".kg-gallery-row").slick({
	//   dots: true,
	//   infinite: true,
	//   speed: 1000,
	//   fade: true,
	//   cssEase: 'ease',
	//   autoplay: 'true'
	// });

    $(function() {
    $(window).on("scroll resize", function() {
        var o = $(window).scrollTop() / ($(document).height() - $(window).height());
        $(".progress-bar").css({
            "width": (100 * o | 0) + "%"
        	});
        $('progress')[0].value = o;
    	})
    });
});