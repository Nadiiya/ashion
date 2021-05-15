<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

//temporary variable
$temp_html = THEME_DIR_URI . '/shop/'; //TODO delete before production

require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/helpers/theme.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';
require_once THEME_DIR .'/inc/wp/theme-support.php';
require_once THEME_DIR .'/inc/wp/theme-support.php';
require_once THEME_DIR .'/inc/wp/images_sizes.php';
require_once THEME_DIR .'/inc/wp/terms_links.php';
require_once THEME_DIR . '/inc/hooks/images.php';
require_once THEME_DIR . '/inc/hooks/tag_cloud.php';
require_once THEME_DIR . '/inc/acf/options-page.php';
require_once THEME_DIR . '/inc/wp/widget_areas.php';
require_once THEME_DIR . '/inc/wp/menus.php';
require_once THEME_DIR . '/inc/shortcodes/footer_shortcodes.php';
require_once THEME_DIR . '/inc/shortcodes/sidebar_shortcodes.php';

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDEgH17ajXjb4MLUlGDTP9kgMAfCzHoZqg');
}
add_action('acf/init', 'my_acf_init');
