<?php
global $temp_html;
get_header();

$title = get_the_title();
$data = get_the_date();
$content = get_the_content();
$date = get_the_date('M d, Y');
$author = get_the_author();
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail() : '<img src="'.get_template_directory_uri().'/dist/images/default-placeholder.png" />';
$breadcrumbs = get_breadcrumbs_section();
$comments_number = get_comments_number();
$tags_list = get_the_tag_list();
$category = get_the_category()[0]->cat_name;
?>

<!-- Breadcrumb HTML -->
<?php echo $breadcrumbs; ?>
<!-- Breadcrumb End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div class="blog__details__content">
					<div class="blog__details__item">
						<?php echo $thumbnail; ?>
						<div class="blog__details__item__title">
							<span class="tip"><?php echo $category; ?></span>
							<h4>
								<?php echo $title; ?>
							</h4>
							<ul>
								<li><?php _e('by', 'ashion');?> <span><?php echo $author; ?></span></li>
								<li><?php echo $date; ?></li>
								<li><?php echo $comments_number;  _e(' Comments', 'ashon'); ?></li>
<!--								TODO change word 'comments' depending on the comments count-->
							</ul>
						</div>
					</div>
					<div class="blog__details__desc">
						<?php echo $content; ?>
					</div>
<!--					TODO styles for content quote-->
					<div class="blog__details__quote">
						<div class="icon"><i class="fa fa-quote-left"></i></div>
						<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
							aliquip ex ea commodo consequat.</p>
					</div>

					<div class="blog__details__tags">
						<?php echo $tags_list; ?>
					</div>
					<div class="blog__details__btns">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="blog__details__btn__item">
<!--									TODO if previous or next is not exist-->
									<h6><?php previous_post_link(' %link', '<i class="fa fa-angle-left"></i> Previous posts'); ?></h6>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="blog__details__btn__item blog__details__btn__item--next">
									<h6><?php next_post_link(' %link', 'Next posts <i class="fa fa-angle-right"></i> '); ?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="blog__details__comment">
						<h5>3 Comment</h5>
						<a href="#" class="leave-btn">Leave a comment</a>
						<div class="blog__comment__item">
							<div class="blog__comment__item__pic">
								<img src="img/blog/details/comment-1.jpg" alt="">
							</div>
							<div class="blog__comment__item__text">
								<h6>Brandon Kelley</h6>
								<p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
									mei et. Simul viderer facilisis egimus tractatos splendi.</p>
								<ul>
									<li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
									<li><i class="fa fa-heart-o"></i> 12</li>
									<li><i class="fa fa-share"></i> 1</li>
								</ul>
							</div>
						</div>
						<div class="blog__comment__item blog__comment__item--reply">
							<div class="blog__comment__item__pic">
								<img src="img/blog/details/comment-2.jpg" alt="">
							</div>
							<div class="blog__comment__item__text">
								<h6>Brandon Kelley</h6>
								<p>Consequat consetetur dissentiet, ceteros commune perpetua mei et. Simul viderer
									facilisis egimus ulla mcorper.</p>
								<ul>
									<li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
									<li><i class="fa fa-heart-o"></i> 12</li>
									<li><i class="fa fa-share"></i> 1</li>
								</ul>
							</div>
						</div>
						<div class="blog__comment__item">
							<div class="blog__comment__item__pic">
								<img src="img/blog/details/comment-3.jpg" alt="">
							</div>
							<div class="blog__comment__item__text">
								<h6>Brandon Kelley</h6>
								<p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
									mei et. Simul viderer facilisis egimus tractatos splendi.</p>
								<ul>
									<li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
									<li><i class="fa fa-heart-o"></i> 12</li>
									<li><i class="fa fa-share"></i> 1</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="blog__sidebar">
					<div class="blog__sidebar__item">
						<div class="section-title">
							<h4>Categories</h4>
						</div>
						<ul>
							<li><a href="#">All <span>(250)</span></a></li>
							<li><a href="#">Fashion week <span>(80)</span></a></li>
							<li><a href="#">Street style <span>(75)</span></a></li>
							<li><a href="#">Lifestyle <span>(35)</span></a></li>
							<li><a href="#">Beauty <span>(60)</span></a></li>
						</ul>
					</div>
					<div class="blog__sidebar__item">
						<div class="section-title">
							<h4>Feature posts</h4>
						</div>
						<a href="#" class="blog__feature__item">
							<div class="blog__feature__item__pic">
								<img src="img/blog/sidebar/fp-1.jpg" alt="">
							</div>
							<div class="blog__feature__item__text">
								<h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
								<span>Seb 17, 2019</span>
							</div>
						</a>
						<a href="#" class="blog__feature__item">
							<div class="blog__feature__item__pic">
								<img src="img/blog/sidebar/fp-2.jpg" alt="">
							</div>
							<div class="blog__feature__item__text">
								<h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
								<span>Seb 17, 2019</span>
							</div>
						</a>
						<a href="#" class="blog__feature__item">
							<div class="blog__feature__item__pic">
								<img src="img/blog/sidebar/fp-3.jpg" alt="">
							</div>
							<div class="blog__feature__item__text">
								<h6>Amf Cannes Red Carpet Celebrities Kend...</h6>
								<span>Seb 17, 2019</span>
							</div>
						</a>
					</div>
					<div class="blog__sidebar__item">
						<div class="section-title">
							<h4>Tags cloud</h4>
						</div>
						<div class="blog__sidebar__tags">
							<a href="#">Fashion</a>
							<a href="#">Street style</a>
							<a href="#">Diversity</a>
							<a href="#">Beauty</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Instagram Begin -->
<div class="instagram">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
				<div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
					<div class="instagram__text">
						<i class="fa fa-instagram"></i>
						<a href="#">@ ashion_shop</a>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
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

<?php
get_footer();
