<?php
//Logo
function footer_logo_shortcode() {
	$logo = get_field('footer_logo', 'options');
	if (empty($logo)) {
		return false;
	}
	$logo_url  = $logo['url'];
	$home_url = home_url('/');
	$html_logo = <<<HTML
<div class="footer__logo">
	<a href="{$home_url}"><img src="{$logo_url}" alt="footer logo"></a>
</div>
HTML;

	return $html_logo;
}
add_shortcode('footer-logo', 'footer_logo_shortcode');

//Description
function footer_description_shortcode() {
	$description = get_field('footer_description', 'options');
	if (empty($description)) {
		return false;
	}
	$html_description = <<<HTML
<p>{$description}</p>
HTML;

	return $html_description;
}
add_shortcode('footer-description', 'footer_description_shortcode');

//Payment
function footer_payment_shortcode() {
	$payments_list = get_field('footer_payment', 'options');

	if (empty($payments_list)) {
		return false;
	}

	$html_payments = null;
	foreach ($payments_list as $payments_item) {
		$payment_link = $payments_item['payment_link'];
		$payment_img = $payments_item['payment_image']['url'];
		$html_payments .= '<a href="' . $payment_link . '"><img src="' . $payment_img . '" alt=""></a>';
	}
	$html_payments_block = <<<HTML
<div class="footer__payment">
	{$html_payments}
</div>
HTML;

	return $html_payments_block;
}
add_shortcode('footer-payment', 'footer_payment_shortcode');

//Social
function footer_social_shortcode() {
	$social_list = get_field('footer_social_links', 'options');

	if (empty($social_list)) {
		return false;
	}

	$html_social = null;
	foreach ($social_list as $social_item) {
		$social_link = $social_item['link'];
		$social_icon = $social_item['icon'];
		$html_social .= '<a href="' . $social_link . '">' . $social_icon . '</a>';
	}
	$html_social_block = <<<HTML
<div class="footer__social">
	{$html_social}
</div>
HTML;

	return $html_social_block;
}
add_shortcode('footer-social', 'footer_social_shortcode');
