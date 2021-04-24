<?php
function get_breadcrumbs_section () {
	$breadcrumbs = yoast_breadcrumb('<div class="breadcrumb__links">', '<div>', false);
	$block =  <<<HTML
<div class="breadcrumb-option">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			{$breadcrumbs}
			</div>
		</div>
	</div>
</div>
HTML;
	return $block;
}
