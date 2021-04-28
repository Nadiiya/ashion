<?php
global $temp_html;
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
		$block = <<<HTML
<div class="col-xl-6 col-lg-7">
	<nav class="header__menu">
		<ul>
			<li><a href="./index.html">Home</a></li>
			<li><a href="#">Women’s</a></li>
			<li><a href="#">Men’s</a></li>
			<li class="active"><a href="./shop.html">Shop</a></li>
			<li><a href="#">Pages</a>
				<ul class="dropdown">
					<li><a href="./product-details.html">Product Details</a></li>
					<li><a href="./shop-cart.html">Shop Cart</a></li>
					<li><a href="./checkout.html">Checkout</a></li>
					<li><a href="./blog-details.html">Blog Details</a></li>
				</ul>
			</li>
			<li><a href="./blog.html">Blog</a></li>
			<li><a href="./contact.html">Contact</a></li>
		</ul>
	</nav>
</div>
<div class="col-lg-3">
<div class="header__right">
	<div class="header__right__auth">
		<a href="#">Login</a>
		<a href="#">Register</a>
	</div>
	<ul class="header__right__widget">
		<li><span class="icon_search search-switch"></span></li>
		<li><a href="#"><span class="icon_heart_alt"></span>
				<div class="tip">2</div>
			</a></li>
		<li><a href="#"><span class="icon_bag_alt"></span>
				<div class="tip">2</div>
			</a></li>
	</ul>
</div>
</div>
HTML;

		return $block;
	}

}
