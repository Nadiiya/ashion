<?php
/**
 * Template Name: About Us
 **/


require_once THEME_DIR .'/inc/classes/ThemeAdvantages.class.php';

$about = new ThemeAdvantages();

$acf_fields = get_field('content');


get_header();

echo get_breadcrumbs_section();

if(!empty($acf_fields)) {
	foreach($acf_fields as $about_block) {
		$layout = $about_block['acf_fc_layout'];
		switch($layout) {
			case 'text_image':
				echo $about->text_image($about_block);
				break;
			case 'services':
				echo $about->services($about_block);
				break;
		}
	}
}

get_footer();
