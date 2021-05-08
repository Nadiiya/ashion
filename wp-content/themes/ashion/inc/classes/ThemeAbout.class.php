<?php
class ThemeAbout {
	/*
	 * Text + Image (2 columns)
	 */
	function text_image($data) {
		$layout = $data['layout'];

		// Image
		$image_id = $data['image']['ID'];
		$image = wp_get_attachment_image($image_id, 'large');
		$html_image = <<<HTML
<div class="col-lg-6 p-0">
        <div class="discount__pic">
            {$image}
        </div>
</div>
HTML;


		// Text
		//TODO add fields for discount__countdown values
		$text = $data['text'];
		$html_text = <<<HTML
<div class="col-lg-6 p-0">
    <div class="discount__text">
        <div class="discount__text__title">
           {$text}
        </div>
        <div class="discount__countdown" id="countdown-time">
	        <div class="countdown__item">
		        <span>29</span>
		        <p>Day</p>
	        </div>
	        <div class="countdown__item">
		        <span>18</span>
		        <p>Hour</p>
	        </div>
	        <div class="countdown__item">
		        <span>20</span>
		         <p>Min</p>
	         </div>
	        <div class="countdown__item">
		         <span>19</span>
		         <p>Sec</p>
	        </div>
        </div>
        <a href="#">Shop now</a>
    </div>
</div>

HTML;


		// Display
		if($layout == 'img_txt') {
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
	function services($data) {
		$services_data = $data['services_items'];

		if(empty($services_data)) {
			return false;
		}

		$html_services = null;
		foreach($services_data as $item) {
			$serv_icon = $item['icon'];
			$serv_title =$item['title'];
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
