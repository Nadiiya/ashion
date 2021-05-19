<?php
class ThemeHeader {
	public $acf_fields;
	function __construct() {
		$this->acf_fields = get_field('header', 'options');
	}

	/*
	 *Logo
	 */
	function get_header_logo() {
		$logo_url = home_url('/');
		$logo_image = $this->acf_fields['logo']['sizes']['thumbnail'];
		$block = <<<HTML
<div class="col-xl-3 col-lg-2">
	<div class="header__logo">
		<a href="{$logo_url}"><img src="{$logo_image}" alt=""></a>
	</div>
</div>
HTML;

	return $block;
}
	/*
	* Main-menu
	*/
function get_main_menu() {
	$main_menu = wp_nav_menu(array(
		'echo' => false,
		'theme_location' => 'main_menu',
		'container'       => 'nav',
		'container_class' => 'header__menu',
		'menu_class' => '',
	));
		$block = <<<HTML
<div class="col-xl-6 col-lg-7">
	{$main_menu}
</div>
HTML;

		return $block;
	}

	/*
	* Right-menu
	*/
	function get_lang_menu() {
		$lang_menu = wp_nav_menu(array(
			'echo' => false,
			'theme_location' => 'top_menu',
			'container'       => '',
			'container_class' => '',
			'menu_class' => 'header__right__lang',
		));

		return $lang_menu;
	}
}
