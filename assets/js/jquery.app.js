$(document).ready(function () {

	AOS.init({
		once: true,
	});

	$('.header-site-burger').click(function () {

		$('#header').toggleClass('is-active')
		$('.header-mobile-nav').toggleClass('is-active')
	})
})

window.addEventListener('load', AOS.refresh)
$(window).load(function () {
	$('body').removeClass('preload')
})