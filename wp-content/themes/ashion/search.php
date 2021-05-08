<?php
get_header(); ?>

<?php echo get_breadcrumbs_section(); ?>

<section class="blog spad">
	<div class="container">
		<div class="row">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					get_template_part('template-parts/posts/post', 'item');
				}
				//TODO pagination
			} else {
				//TODO no-content template-part?
				echo 'No Results';
			}
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
