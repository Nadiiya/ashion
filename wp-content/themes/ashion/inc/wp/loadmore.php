<?php
add_action( 'wp_ajax_loadmore', 'true_loadmore' );
add_action( 'wp_ajax_nopriv_loadmore', 'true_loadmore' );

function true_loadmore() {

$paged = ! empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
$paged++;

$args = array(
'paged' => $paged,
'post_status' => 'publish'
);

query_posts( $args );

while( have_posts() ) : the_post();

	get_template_part('template-parts/posts/post', 'item');

endwhile;


die();

}
