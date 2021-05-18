<?php
get_header(); ?>

<?php echo get_breadcrumbs_section(); ?>

<!-- Blog Section Begin -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					get_template_part('template-parts/posts/post', 'item');
				}
				//TODO pagination
			}
			?>
		</div>
	</div>
</section>
<!-- Blog Section End -->

<?php echo do_shortcode('[instagram-feed]');?>

<?php get_footer(); ?>
