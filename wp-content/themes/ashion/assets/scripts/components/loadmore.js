jQuery(function($){

	// определяем в переменные кнопку, текущую страницу и максимальное кол-во страниц
	var button = $( '#load-more' ),
			paged = button.data( 'paged' ),
			maxPages = button.data( 'max_pages' );

	button.click( function( evt ) {

		evt.preventDefault(); // предотвращаем клик по ссылке

		$.ajax({
			type : 'POST',
			url : themeVars.ajaxurl, // получаем из wp_localize_script()
			data : {
				paged : paged, // номер текущей страниц
				action : 'loadmore', // экшен для wp_ajax_ и wp_ajax_nopriv_
			},
			beforeSend : function() {
				button.text( 'Loading...' );

			},
			success : function( data ) {
				var content = $( data );
				var picture = content.find( '.set-bg' );
				if ( picture ) {
					var bg = picture.data( 'setbg' );
					picture.css( 'background-image', 'url(' + bg + ' )' );
				}

				$('.blog-section.spad .row').append(content).masonry('appended', content)

				paged++; // инкремент номера страницы
				button.text( 'Load more' );

				// если последняя страница, то удаляем кнопку
				if( paged == maxPages ) {
					button.remove();
				}
			},

		});

	} );
});
