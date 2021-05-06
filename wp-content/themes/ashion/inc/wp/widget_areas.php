<?php
add_action( 'widgets_init', 'ashion_widget_areas' );
function ashion_widget_areas(){
	//Footer Column 1
	register_sidebar( array(
		'name'          => __('Footer Column 1'),
		'id'            => 'footer-col-1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );
	//Footer Column 2
	register_sidebar( array(
		'name'          => __('Footer Column 2'),
		'id'            => 'footer-col-2',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );
	//Footer Column 3
	register_sidebar( array(
		'name'          => __('Footer Column 3'),
		'id'            => 'footer-col-3',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );
	//Footer Column 4
	register_sidebar( array(
		'name'          => __('Footer Column 4'),
		'id'            => 'footer-col-4',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );
}
