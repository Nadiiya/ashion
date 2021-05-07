<?php
// Register nav menu
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'main_menu', 'Main menu' );
}

// Change class for submenu
add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );
function change_wp_nav_menu( $classes, $args, $depth ) {
	if ( $args->theme_location == 'main_menu' ) {
		$classes[] = 'dropdown';
	}

	return $classes;
}
