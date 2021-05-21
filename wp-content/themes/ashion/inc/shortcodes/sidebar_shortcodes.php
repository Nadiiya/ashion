<?php
//Featured Posts
function featured_posts_shortcode() {
	$block_title = __('Feature posts', 'ashion');
	$featured_posts = wp_get_recent_posts(
		array(
		'numberposts' => 3,
		'post_status' => 'publish',
		'suppress_filters' => false,
		)
	);

	if (empty($featured_posts)) {
		return false;
	}

	$html_featured_posts = null;
	foreach ($featured_posts as $post_item) {

		$post_ID = $post_item['ID'];
		$post_thumbnail = get_the_post_thumbnail($post_ID, 'featured-posts');
		$post_title = get_the_title($post_ID);
		$post_url = get_permalink($post_ID);
		$post_date = get_the_date('M d, Y', $post_ID);

		$html_featured_posts .= '<a href="' . $post_url . '" class="blog__feature__item">
				<div class="blog__feature__item__pic">' . $post_thumbnail. '</div>
				<div class="blog__feature__item__text">
					<h6>' . $post_title . '</h6>
					<span>' . $post_date . '</span>
				</div>
			</a>';
	}
	$html_featured_block = <<<HTML
<div class="blog__sidebar__item">
	<div class="section-title">
		<h4>{$block_title}</h4>
	</div>
	{$html_featured_posts}
</div>
HTML;

	return $html_featured_block;
}
add_shortcode('featured-posts', 'featured_posts_shortcode');
