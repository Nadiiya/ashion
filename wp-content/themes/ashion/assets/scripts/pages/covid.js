$(document).ready(function () {
	if ($('.covid-page').length > 0) {

		$.ajax({
			url: themeVars.ajaxurl,
			dataType: 'json',
			method: 'GET',
			data: {
				action: 'get_covid_data',
			},
			success: function (data) {
				// eslint-disable-next-line no-unused-vars
				let countries = data.countries
				$.each(countries, function (i, item) {
					$('#countries').append($('<option>', {
						value: item.id,
						text : item.text,
					}));
				});
			},
		})

		// eslint-disable-next-line no-unused-vars
		var countryChart

		$('.countries-list select').change(function () {

			// eslint-disable-next-line no-unused-vars
			let countryCode = $(this).val()

			$('.covid-results .error-message').hide()
			$.ajax({
				url: themeVars.ajaxurl,
				dataType: 'json',
				method: 'GET',
				data: {
					action: 'get_covid_data',
					country_code: countryCode,
				},
				success: function (data) {
					if (data.status==='success') {
						$('.country-chart').show()
						var ctx = document.getElementById('country_chart').getContext('2d')
						if (typeof countryChart=='undefined') {
							// eslint-disable-next-line no-undef
							var countryChart = new Chart(ctx, {
								// The type of chart we want to create
								type: 'line',

								// The data for our dataset
								data: {
									labels: data.results.labels,
									datasets: data.results.datasets,
								},

								// Configuration options go here
								options: {
									events: ['click'],
								},
							})
						} else {
							countryChart.data = {
								labels: data.results.labels,
								datasets: data.results.datasets,
							}

							countryChart.update()
						}

					} else {
						var errorMessage = data.error
						$('.covid-results .error-message').text(errorMessage).fadeIn(300);
						$('country_chart').hide();
					}
				},
			})

		})
	}
})
