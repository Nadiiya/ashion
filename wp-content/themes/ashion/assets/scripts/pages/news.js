$(document).ready(function () {
	if ($('.blog-section').length > 0) {
		$('.blog-section.spad .row').masonry({
			itemSelector: '.blog__item',
		})
	}
})
