//npm scripts
import 'popper.js/dist/popper.min'
import 'bootstrap/dist/js/bootstrap'
import 'jquery-ui-bundle/jquery-ui'
import 'magnific-popup/dist/jquery.magnific-popup.min'
import 'mixitup/dist/mixitup.min'
import 'jquery-countdown/dist/jquery.countdown.min'
import 'owl.carousel/dist/owl.carousel.min'
import 'jquery.nicescroll/dist/jquery.nicescroll.min'
import 'slicknav/dist/jquery.slicknav'
import 'masonry-layout/dist/masonry.pkgd.min'
import 'select2/dist/js/select2'
import 'chart.js/dist/Chart.min'

import './pages/news'
import './pages/team'
import './pages/map'
import './components/discount'
import './components/loadmore'
import './pages/covid'

'use strict';

(function ($) {


	/*------------------
		Preloader
	--------------------*/
	$(window).on('load', function () {
		$(".loader").fadeOut();
		$("#preloder").delay(200).fadeOut("slow");
		/*------------------
			Product filter
		--------------------*/
		$('.filter__controls li').on('click', function () {
			$('.filter__controls li').removeClass('active');
			$(this).addClass('active');
		});
	});

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function () {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	//Search Switch
	$('.search-switch').on('click', function () {
		$('.search-model').fadeIn(400);
	});

	$('.search-close-switch').on('click', function () {
		$('.search-model').fadeOut(400, function () {
			$('#search-input').val('');
		});
	});

	//Canvas Menu
	$(".canvas__open").on('click', function () {
		$(".offcanvas-menu-wrapper").addClass("active");
		$(".offcanvas-menu-overlay").addClass("active");
	});

	$(".offcanvas-menu-overlay, .offcanvas__close").on('click', function () {
		$(".offcanvas-menu-wrapper").removeClass("active");
		$(".offcanvas-menu-overlay").removeClass("active");
	});

	/*------------------
		Navigation
	--------------------*/
	$(".header__menu").slicknav({
		prependTo: '#mobile-menu-wrap',
		allowParentLinks: true,
	});

	/*------------------
		Accordin Active
	--------------------*/
	$('.collapse').on('shown.bs.collapse', function () {
		$(this).prev().addClass('active');
	});

	$('.collapse').on('hidden.bs.collapse', function () {
		$(this).prev().removeClass('active');
	});

	/*--------------------------
		Banner Slider
	----------------------------*/
	$(".banner__slider").owlCarousel({
		loop: true,
		margin: 0,
		items: 1,
		dots: true,
		smartSpeed: 1200,
		autoHeight: false,
		autoplay: true,
	});

	/*--------------------------
		Product Details Slider
	----------------------------*/
	$(".product__details__pic__slider").owlCarousel({
		loop: false,
		margin: 0,
		items: 1,
		dots: false,
		nav: true,
		navText: ["<i class='arrow_carrot-left'></i>","<i class='arrow_carrot-right'></i>"],
		smartSpeed: 1200,
		autoHeight: false,
		autoplay: false,
		mouseDrag: false,
		startPosition: 'URLHash',
	}).on('changed.owl.carousel', function(event) {
		var indexNum = event.item.index + 1;
		product_thumbs(indexNum);
	});

	function product_thumbs (num) {
		var thumbs = document.querySelectorAll('.product__thumb a');
		thumbs.forEach(function (e) {
			e.classList.remove("active");
			if(e.hash.split("-")[1] == num) {
				e.classList.add("active");
			}
		})
	}


	/*------------------
		Magnific
	--------------------*/
	$('.image-popup').magnificPopup({
		type: 'image',
	});


	$(".nice-scroll").niceScroll({
		cursorborder:"",
		cursorcolor:"#dddddd",
		boxzoom:false,
		cursorwidth: 5,
		background: 'rgba(0, 0, 0, 0.2)',
		cursorborderradius:50,
		horizrailenabled: false,
	});

	/*-------------------
		Range Slider
	--------------------- */
	var rangeSlider = $(".price-range"),
			minamount = $("#minamount"),
			maxamount = $("#maxamount"),
			minPrice = rangeSlider.data('min'),
			maxPrice = rangeSlider.data('max');
	rangeSlider.slider({
		range: true,
		min: minPrice,
		max: maxPrice,
		values: [minPrice, maxPrice],
		slide: function (event, ui) {
			minamount.val('$' + ui.values[0]);
			maxamount.val('$' + ui.values[1]);
		},
	});
	minamount.val('$' + rangeSlider.slider("values", 0));
	maxamount.val('$' + rangeSlider.slider("values", 1));

	/*------------------
		Single Product
	--------------------*/
	$('.product__thumb .pt').on('click', function(){
		var imgurl = $(this).data('imgbigurl');
		var bigImg = $('.product__big__img').attr('src');
		if(imgurl != bigImg) {
			$('.product__big__img').attr({src: imgurl});
		}
	});

	/*-------------------
		Quantity change
	--------------------- */
	var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				// eslint-disable-next-line no-redeclare
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
	});

	/*-------------------
		Radio Btn
	--------------------- */
	$(".size__btn label").on('click', function () {
		$(".size__btn label").removeClass('active');
		$(this).addClass('active');
	});

})(jQuery);
