<?php
global $temp_html;
require_once THEME_DIR .'/inc/classes/ThemeHeader.class.php';

$header = new ThemeHeader();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
	<div class="offcanvas__close">+</div>
	<ul class="offcanvas__widget">
		<li><span class="icon_search search-switch"></span></li>
		<li><a href="#"><span class="icon_heart_alt"></span>
				<div class="tip">2</div>
			</a></li>
		<li><a href="#"><span class="icon_bag_alt"></span>
				<div class="tip">2</div>
			</a></li>
	</ul>
	<div class="offcanvas__logo">
		<?php echo $header->get_header_logo(); ?>
	</div>
	<div id="mobile-menu-wrap"></div>
	<div class="offcanvas__auth">
		<a href="#">Login</a>
		<a href="#">Register</a>
	</div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
	<div class="container-fluid">
		<div class="row">
			<?php echo $header->get_header_logo(); ?>
			<?php echo $header->get_main_menu(); ?>
			<div class="col-lg-3">
				<div class="header__right">
					<?php echo $header->get_lang_menu() ;?>
					<div class="header__right__auth">
						<a href="#">Login</a>
						<a href="#">Register</a>
					</div>
					<ul class="header__right__widget">
						<li><span class="icon_search search-switch"></span></li>
						<li><a href="#"><span class="icon_heart_alt"></span>
								<div class="tip">2</div>
							</a></li>
						<li><a href="#"><span class="icon_bag_alt"></span>
								<div class="tip">2</div>
							</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="canvas__open">
			<i class="fa fa-bars"></i>
		</div>
	</div>
</header>
<!-- Header Section End -->

