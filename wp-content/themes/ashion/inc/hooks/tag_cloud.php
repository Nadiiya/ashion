<?php
add_filter( 'widget_tag_cloud_args', function ( $args ) {
	$args['largest']  = 13;
	$args['smallest'] = 13;
	$args['unit']     = 'px';

	return $args;
} );
