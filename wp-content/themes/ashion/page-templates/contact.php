<?php
/**
 * Template Name: Contacts
**/

init_google_map();
get_header();

$section_title = get_field('title');
$address = get_field('address');
$phone_numbers = get_field('phone');
$support = get_field('support');
$contact_form_id = get_field('contact_form');
$location = get_field('map');
?>

<?php echo get_breadcrumbs_section(); ?>

<!-- Contact Section Begin -->
<section class="contact spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="contact__content">
					<div class="contact__address">
						<?php if ($section_title) {
							echo '<h5>' . $section_title . '</h5>';
						}
						?>
						<ul>
							<?php if ($address) {
								echo '<li>';
								echo '<h6>';
								echo ($address['icon'] ? $address['icon'] : '');
								echo $address['title'];
								echo '</h6>';
								echo '<p>' . ($address['address']) .  '</p>';
								echo '</li>';
							}

							if ($phone_numbers) : ?>
							<li>
								<h6>
									<?php echo (($phone_numbers['icon'] ? $phone_numbers['icon'] : '') . $phone_numbers['title']) ?>
								</h6>
								<?php
								if( $numbers = $phone_numbers['phone_number'] ) {
									echo '<p>';
									foreach( $numbers as $item ) {
										echo '<span>';
										echo $item['phone_number'];
										echo '</span>';
									}
									echo '</p>';
								}
								?>
							</li>
							<?php endif; ?>
							<?php if ($support) {
								echo '<li>';
								echo '<h6>';
								echo ($support['icon'] ? $support['icon'] : '');
								echo $support['title'];
								echo '</h6>';
								echo '<p>' . ($support['email']) .  '</p>';
								echo '</li>';
							}
							?>
						</ul>
					</div>
					<div class="contact__form">
						<?php echo do_shortcode('[contact-form-7 id="' . $contact_form_id . '" title="Contact us"]'); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<?php
				if( $location ): ?>
					<div class="acf-map contact__map" data-zoom="<?php echo esc_attr($location['zoom']); ?>">
						<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- Contact Section End -->

<?php echo do_shortcode('[instagram-feed]');?>


<?php get_footer(); ?>
