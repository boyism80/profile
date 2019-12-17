$(document).ready(function () {

	$('.owl-carousel').owlCarousel({
		smartSpeed: 550,
		nav: false,
		dots: false,
		loop: true,
		autoHeight: true,
		autoplay: true,
		autoplayTimeout: 3e3,
		autoplaySpeed: 1200,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 4
			},
			1024: {
				items: 5
			}
		}
	});
})