<?php
/**
 * Template Name: Covid
 **/
?>

<?php get_header(); ?>

<div class="covid-page container">

	<div class="row">
		<div class="col-lg-12">
			<div class="countries-list">
				<select id="countries" style='width: 200px;'">
				<option>---<?php _e( 'choose a country', 'ashion' ) ?>---</option>
				</select>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="covid-results">
				<div class="error-message">

				</div>
				<div class="country-chart">
					<canvas id="country_chart"></canvas>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>

