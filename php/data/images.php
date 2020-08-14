<?php

$images = array(
	'manager' => array(
		'logo' => array(
			'bg' => 'copyright/alexonbstudio-logo-v2-background.jpg', /*Indicate where is place is after this folder dir [your-site.TLD/assets/images]*/
			'icon' => 'pinned/favicon.ico',/*Indicate where is place is after this folder dir [your-site.TLD/assets/images]*/
			'normal' => 'themes/alexonbstudio-logo-v2-mobile.svg',/*Indicate where is place is after this folder dir [your-site.TLD/assets/images]*/
			'small' => 'pinned/favicon-32x32.png',/*Indicate where is place is after this folder dir [your-site.TLD/assets/images]*/
			'big' => 'themes/alexonbstudio-logo-v2-desktop.svg',/*Indicate where is place is after this folder dir [your-site.TLD/assets/images]*/
			'persona' => 'svg/alexonbstudio-persona-alexonbalangue.svg',/*Indicate where is place is after this folder dir [your-site.TLD/assets/images]*/
			'black-and-white' => 'themes/alexonbstudio-logo-v2-normal-black-and-white.svg'/*Indicate where is place is after this folder "dir" [your-site.TLD/assets/images]*/
		),
		'project' => array(
			'slide' => array(
				'1' => 'general/project/deejays.png',
				'2' => 'general/project/gaming.png',
				'3' => 'general/project/informatique.png',
				'4' => 'general/project/streaming.png'
			)
		),
		'dir' => 'assets/images' /*Indicate where is place is [your-site.TLD/assets/images]*/
	)
);


$WP_images = json_encode($images);

?>