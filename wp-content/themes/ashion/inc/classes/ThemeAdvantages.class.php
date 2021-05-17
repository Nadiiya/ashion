<?php

class ThemeAdvantages {
	/*
	 * Text + Image (2 columns)
	 */
	function text_image( $data ) {
		$layout = $data['layout'];

		if ( empty( $layout ) ) {
			return false;
		}

		// Image
		$image_id   = $data['image']['ID'];
		$image      = wp_get_attachment_image( $image_id, 'large' );
		$html_image = <<<HTML
<div class="col-lg-6 p-0">
    <div class="discount__pic">
        {$image}
    </div>
</div>
HTML;
		// Text
		$finish_discount_date = $data['finish_date'];
		$discount_title       = $data['discount_title'];
		$per_sent             = $data['discount_per_sent'];
		$link                 = $data['buy_now_link'];
		$html_text            = <<<HTML
<div class="col-lg-6 p-0">
    <div class="discount__text">
        <div class="discount__text__title">
			<span>Discount</span>
			<h2>{$discount_title}</h2>
			<h5><span>Sale</span>{$per_sent}%</h5>
        </div>
        <div class="discount__countdown" id="countdown-time" data-time="{$finish_discount_date}">
        </div>
        <a href="{$link['url']}">{$link['title']}</a>
    </div>
</div>

HTML;
		// Display
		if ( $layout == 'img_txt' ) {
			$display = $html_image . $html_text;
		} else {
			$display = $html_text . $html_image;
		}

		$html_block = <<<HTML
<section class="flex_text_image_2_col">
	<div class="container">
		<div class="row">
			{$display}
		</div>
	</div>
</section>
HTML;

		return $html_block;
	}

	/**
	 * Services
	 */
	function services( $data ) {
		$services_data = $data['services_items'];

		if ( empty( $services_data ) ) {
			return false;
		}

		$html_services = null;
		foreach ( $services_data as $item ) {
			$serv_icon        = $item['icon'];
			$serv_title       = $item['title'];
			$serv_description = $item['description'];

			$html_services .= <<<HTML
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="services__item">
        {$serv_icon}
        <h6>{$serv_title}</h6>
        <p>{$serv_description}</p>
    </div>
</div>
HTML;
		}

		$html_block = <<<HTML
<section class="services spad">
    <div class="container">
        <div class="row">
            {$html_services}
        </div>
    </div>
</section>
HTML;

		return $html_block;
	}
}
