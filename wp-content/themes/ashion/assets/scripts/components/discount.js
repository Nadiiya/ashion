$(document).ready(function() {
	if ($('#countdown-time').length > 0) {
		$('#countdown-time').countdown($('#countdown-time').attr('data-time'), function (event) {
			$(this).html(event.strftime('<div class=\'countdown__item\'><span>%D</span> <p>Day</p> </div>'
					+ '<div class=\'countdown__item\'><span>%H</span> <p>Hour</p> </div>'
					+ '<div class=\'countdown__item\'><span>%M</span> <p>Min</p> </div>'
					+ '<div class=\'countdown__item\'><span>%S</span> <p>Sec</p> </div>'))
		})
	}

})
