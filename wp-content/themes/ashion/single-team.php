<?php

$title = get_the_title();
$content = get_the_content();
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail('', 'large') : '<img src="'.get_template_directory_uri().'/dist/images/default-placeholder.png" />';
$department = get_field('department');
$member_data = ashion_custom_taxonomies_terms_links();
get_header();

echo get_breadcrumbs_section();
?>

	<section class="blog-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div class="blog__details__content">
						<div class="blog__details__item">
							<?php echo $thumbnail; ?>
							<div class="blog__details__item__title">
								<h4>
									<?php echo $title; ?>
								</h4>
								<?php echo $member_data; ?>
							</div>
						</div>
						<div class="blog__details__desc">
							<?php echo $content; ?>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

<?php
get_footer();
