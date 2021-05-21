<!-- Footer Section Begin -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-7">
				<div class="footer__about">
					<?php dynamic_sidebar('footer-col-1'); ?>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-5">
				<div class="footer__widget">
					<?php dynamic_sidebar('footer-col-2'); ?>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4">
				<div class="footer__widget">
					<?php dynamic_sidebar('footer-col-3'); ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-8 col-sm-8">
				<div class="footer__newslatter">
					<?php dynamic_sidebar('footer-col-4'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="footer__copyright__text">
					<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script><?php echo get_field('copyright_text', 'options'); ?></p>
				</div>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
	<div class="h-100 d-flex align-items-center justify-content-center">
		<div class="search-close-switch">+</div>
		<?php get_search_form(); ?>
	</div>
</div>
<!-- Search End -->

<?php wp_footer(); ?>
</body>
</html>
