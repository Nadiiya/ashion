<?php
function get_breadcrumbs_section () {
	$breadcrumbs = yoast_breadcrumb('<div class="breadcrumb__links">', '</div>', false);
	$block =  <<<HTML
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			{$breadcrumbs}
			</div>
		</div>
	</div>
</div>
HTML;
	return $block;
}

function init_google_map() {
	function js_google_map() {
		//TODO use API key from options
		wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDEgH17ajXjb4MLUlGDTP9kgMAfCzHoZqg&language=en', '', null, true);
	}
	add_action('wp_enqueue_scripts', 'js_google_map');

}
