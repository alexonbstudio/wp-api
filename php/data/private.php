<?php

$private = array(
	'born' => 'Date/Mois/Année',  /*example: 24/04/1991 */
	'name' => 'Nom complet',
	'address' => '0 rue de paris exemple',
	'postal' => '75017',
	'city' => 'Paris',
	'region' => 'île-de-France',
	'contry' => 'France',
	'phone' => array(
		'code' => '+33',
		'normal' => '0',
		'number' => '123456789'
	),
	'mobile' => array(
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
		'public' => 'contact',/* not put with @your-website.tld only <only-here> */
		'private' => 'pseudo-ou-nom',/* not put with @your-website.tld only <only-here> */
		'@' => array(
			'external' => 'other.tld' /*Is use with mail->private only*/
		)
	)
);


$WP_private = json_encode($private);


?>