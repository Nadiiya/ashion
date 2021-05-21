<?php
get_header();

$title = get_the_title();
$content = get_the_content();
$date = get_the_date('M d, Y');
$author = get_the_author();
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail('', 'large') : '<img src="'.get_template_directory_uri().'/dist/images/default-placeholder.png" />';
$breadcrumbs = get_breadcrumbs_section();
$comments_number = get_comments_number();
$tags_list = get_the_tag_list();
$category = get_the_category()[0]->cat_name;
$previous_posts_text = __('Previous posts', 'ashion');
$next_post_text = __('Next posts', 'ashion');
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
								<li><?php echo $comments_number;  _e(' Comments', 'ashion'); ?></li>
<!--								TODO change word 'comments' depending on the comments count-->
							</ul>
						</div>
					</div>
					<div class="blog__details__desc">
						<?php echo $content; ?>
					</div>
					<div class="blog__details__tags">
						<?php echo $tags_list; ?>
					</div>
					<div class="blog__details__btns">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="blog__details__btn__item">
<!--									TODO if previous or next is not exist-->
									<h6><?php previous_post_link(' %link', '<i class="fa fa-angle-left"></i>' . $previous_posts_text); ?></h6>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="blog__details__btn__item blog__details__btn__item--next">
									<h6><?php next_post_link(' %link', $next_post_text . ' <i class="fa fa-angle-right"></i> '); ?></h6>
								</div>
							</div>
						</div>
					</div>
					<?php comments_template(); ?>
					<div class="blog__details__comment">
						<h5>3 Comment</h5>
						<a href="#" class="leave-btn">Leave a comment</a>
						<div class="blog__comment__item">
							<div class="blog__comment__item__pic">
								<img src="<?php echo $temp_html ?>img/blog/details/comment-1.jpg" alt="">
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
								<img src="<?php echo $temp_html ?>img/blog/details/comment-2.jpg" alt="">
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
								<img src="<?php echo $temp_html ?>img/blog/details/comment-3.jpg" alt="">
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
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php echo do_shortcode('[instagram-feed]');?>

<?php
get_footer();
