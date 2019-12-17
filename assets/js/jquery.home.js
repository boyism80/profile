window.addEventListener('load', AOS.refresh)

$(document).ready(function () {

	let $slider = $('.js-slideshow-slick')
	$slider.slick({
		dots: true,
		arrows: false,
		speed: 1e3,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: "linear",
		draggable: false,
		autoplay: true,
		autoplaySpeed: 4900,
		pauseOnHover: false,
		pauseOnFocus: false,
		responsive: [{
			breakpoint: 960,
			settings: {
				waitForAnimate: false,
				pauseOnFocus: false,
				pauseOnHover: false,
				swipe: false
			}
		}]
	})


	$slider.on('beforeChange', function (event, slick, current, next) {

		$('.js-slideshow-slick-pagination li').filter(function () {

			return parseInt($(this).attr('data-slideshow-slide-index')) == current;
		}).removeClass('is-active')

		$('.js-slideshow-slick-pagination li').filter(function () {

			return parseInt($(this).attr('data-slideshow-slide-index')) == next;
		}).addClass('is-active')
	}).trigger('beforeChange', [null, $slider, 0, 0])

	$('.js-slideshow-slick-pagination li a').click(function () {

		let index = $(this).parent().attr('data-slideshow-slide-index')
		$slider.slick('slickGoTo', index)
	})

	let $owl = $('.owl-carousel')
	$owl.owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayHoverPause:true,
		autoplayTimeout: 2500,
		autoplaySpeed: 1200,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 4
			},
			1024: {
				items: 6
			},
			1200: {
				items: 8
			}
		}
	});
})