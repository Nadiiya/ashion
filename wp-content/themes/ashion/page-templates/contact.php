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
					<div class="acf-map contact__map" data-zoom="16">
						<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
					</div>
				<?php endif; ?>

				<div class="contact__map">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
						height="780" style="border:0" allowfullscreen="">
					</iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Section End -->

<!-- Instagram Begin -->
<div class="instagram">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Instagram End -->


<?php get_footer(); ?>
