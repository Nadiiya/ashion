<?php


function my_acf_init() {
	$api_key = get_field('google_map_api_key', 'options');

	acf_update_setting('google_api_key', $api_key);
}
add_action('acf/init', 'my_acf_init');
