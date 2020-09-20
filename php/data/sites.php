<?php
# $sites['protocol']

$sites = array(
	'name' => 'AlexonbStudio',
	'domain' => 'alexonbstudio.fr',
	'auto' => array(
		'domain' => preg_replace('/www./i', '', $_SERVER['SERVER_NAME'])
	),
	'sub-domain' => '',
	'protocol' => isset($_SERVER["HTTPS"]) ? 'https' : 'http',
	'default-timezone' => 'Europe/Paris',
	'tarifs' => array( #pricing as the services CO-Partner
		'tva' => 'HT',
		'currency' => '€',
		'freelancer' => array(
			'hours' => '77,73',
			'days' => '1 865,56',
			'weeks' => '13 058,93',
			'months' => '56 741,04',
			'trimestriels' => '170 223,13',
			'years' => '817 071,00'
		),
		'base' => array(
			'hours' => '6,48',
			'days' => '158,56',
			'weeks' => '1 088,24',
			'months' => '4 728,42',
			'trimestriels' => '14 185,26',
			'years' => '56 741,04'
		),
		'reduction' => array(
			'hours' => '38,87',
			'days' => '932,78',
			'weeks' => '6 529,46',
			'months' => '28 370,52',
			'trimestriels' => '85 111,56',
			'years' => '408 535,50'
		),		
		'option' => array(
			'others' => array(
				'freelancer' => array(
					'hours' => '77,73',
					'days' => '1 865,56',
					'weeks' => '13 058,93',
					'months' => '56 741,04',
					'trimestriels' => '170 223,13',
					'years' => '817 071,00'
				),
				'base' => array(
					'hours' => '6,48',
					'days' => '158,56',
					'weeks' => '1 088,24',
					'months' => '4 728,42',
					'trimestriels' => '14 185,26',
					'years' => '56 741,04'
				),
				'reduction' => array(
					'hours' => '38,87',
					'days' => '932,78',
					'weeks' => '6 529,46',
					'months' => '28 370,52',
					'trimestriels' => '85 111,56',
					'years' => '408 535,50'
				)
			),
			'others-services' => array(
				'what1' => array(
					'hours' => '77,73',
					'days' => '1 865,56',
					'weeks' => '13 058,93',
					'months' => '56 741,04',
					'trimestriels' => '170 223,13',
					'years' => '817 071,00'
				),
				'what2' => array(
					'hours' => '6,48',
					'days' => '158,56',
					'weeks' => '1 088,24',
					'months' => '4 728,42',
					'trimestriels' => '14 185,26',
					'years' => '56 741,04'
				),
				'what3' => array(
					'hours' => '38,87',
					'days' => '932,78',
					'weeks' => '6 529,46',
					'months' => '28 370,52',
					'trimestriels' => '85 111,56',
					'years' => '408 535,50'
				)
			)
		)
	)
);


$WP_sites = json_encode($sites);


?>