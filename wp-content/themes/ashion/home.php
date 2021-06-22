<?php
get_header(); ?>

<?php echo get_breadcrumbs_section(); ?>


<!-- Blog Section Begin -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<?php
			if (have_posts()): ?>
				<?php while (have_posts()) {
					the_post();
					get_template_part('template-parts/posts/post', 'item');
				}?>

			<?php endif; ?>
		</div>
		<?php
		global $wp_query;
		$paged     = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$max_pages = $wp_query->max_num_pages;

		if ( $paged < $max_pages ) : ?>
			<div class="container">
				<div class="text-center">
					<?php echo '<a href="#" data-max_pages="' . $max_pages . '" data-paged="' . $paged . '" class="primary-btn load-btn" id="load-more">' . __( 'Load more posts',
							'ashion' ) . '</a>' ?>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</div>
</section>
<!-- Blog Section End -->

<?php echo do_shortcode('[instagram-feed]');?>

<?php get_footer(); ?>
