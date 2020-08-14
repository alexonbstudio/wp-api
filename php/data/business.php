<?php

$busness = array(
	'local' => array(
		'born' => 'date/month/years', /*example: 24/04/1991 */
		'name' => 'compagny name',
		'siret' => 'PENDING',
		'tva' => 'PENDING',
		'vat' => 'PENDING',
		'address' => 'PENDING',
		'postal' => 'PENDING',
		'city' => 'Paris',
		'region' => 'Ile-de-France',
		'contry' => 'France',
		'status' => 'PENDING',
		'geo' => array(
			'latitude' => '',
			'longitude' => ''
		),
		'mobile' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '123456789'
		),
		'phone' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => '123456789'
		),
		'fax' => array(
			'code' => '+33',
			'normal' => '0',
			'number' => ''
		),
		'mail' => array(
			'contact' => '',  /* not put with @your-website.tld only <only-here> */
			'support' => '',  /* not put with @your-website.tld only <only-here> */
			'commercial' => '',  /* not put with @your-website.tld only <only-here> */
			'sponsor' => '',  /* not put with @your-website.tld only <only-here> */
			'partner' => '',  /* not put with @your-website.tld only <only-here> */
			'business' => '',  /* not put with @your-website.tld only <only-here> */
			'devis' => '',  /* not put with @your-website.tld only <only-here> */
			'career' => ''  /* not put with @your-website.tld only <only-here> */
		),
		'team' => array(
			'john' => array(
			'name' => 'John',
			'url' => 'john.tld'
			),
			'bob' => array(
				'name' => 'bob',
				'url' => 'bob.tld'
			)
		)
	),
	'external' => array(
		'amerique' => array(
			'' => ''
		),
		'europe' => array(
			'' => ''
		),
		'asia' => array(
			'' => ''
		),
		'africa' => array(
			'' => ''
		)
	),
	'team' => array(
		'1' => 'Full Name (Developer)',
		'2' => 'Full Name (Designer)',
		'3' => '',
		'4' => '',
		'5' => '',
		'6' => '',
		'7' => '',
		'8' => '',
		'9' => '',
		'10' => ''
	)
);


$WP_business = json_encode($business);


?>