$(document).ready(function() {

if($('body.blog').length > 0) {
	$('.blog.spad .row').masonry({
		itemSelector: '.blog__item',
	});
}

});
