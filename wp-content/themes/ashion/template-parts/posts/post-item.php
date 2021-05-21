<?php
$title = get_the_title();
$data = get_the_date();
$content = get_the_content();
$date = get_the_date('M d, Y');
$author = get_the_author();
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/images/default-placeholder.png';
$permalink = get_permalink();
$text_by = __('by', 'ashion');
//TODO add large__item dynamic class
?>

<div class="blog__item">
	<div class="blog__item__pic large__item set-bg" data-setbg="<?php echo $thumbnail ?>"></div>
	<div class="blog__item__text">
		<h6><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h6>
		<ul>
			<li><?php echo $text_by; ?><span> <?php echo $author; ?></span></li>
			<li><?php echo $data; ?></li>
		</ul>
	</div>
</div>
