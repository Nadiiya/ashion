<?php
/**
 * Theme CSS & JS
 */
function theme_scripts() {
	// Main CSS
	wp_enqueue_style('main-stylesheet', asset_path( 'styles/main.css' ), false, '1.0.0');

	//Google Font
	wp_enqueue_style('font-cookie', 'https://fonts.googleapis.com/css2?family=Cookie&display=swap', false, '1.0.0');
	wp_enqueue_style('font-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', false, '1.0.0');

	// Deregister the jquery version bundled with WordPress
	wp_deregister_script('jquery');

	// CDN hosted jQuery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', [], '3.3.1', false);

	// Main JS
	wp_enqueue_script('main-javascript', asset_path('scripts/main.js'), [ 'jquery' ], '1.0.0', true);

	// Throw variables to front-end
	$theme_vars = array(
		'home'   => get_home_url(),
		'ajaxurl' => admin_url('admin-ajax.php'),
		'is_auth' => is_user_logged_in(),
	);
	wp_localize_script('main-javascript', 'themeVars', $theme_vars);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
