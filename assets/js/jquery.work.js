$(document).ready(function () {

	$('.work-item-container,.work-progress-container').each(function () {

		$(this).waitForImages().done(function () {

			$(this).packery({
				itemSelector: ".work-item"
			})
		})
	})
})