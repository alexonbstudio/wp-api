<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

#define
if (!defined('DS')){
	define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('DIR')){
	define('DIR', __DIR__);
}

#require libs/custom/
foreach (glob('data/*.php') as $GlobData) { include_once DIR.DS.$GlobData; }

#Decode
$sites = json_decode($WP_sites, true);
$private = json_decode($WP_private, true);
$images = json_decode($WP_images, true);
$business = json_decode($WP_business, true);

#more
$domainTLD = (!empty($sites['domain']) ? $sites['domain'] : $sites['auto']['domain']);

#frontend Json Output

if(isset($_GET['api'])){
	if($_GET['api'] == 'business'){
		header('Content-type: application/json;; charset=utf-8');
		include_once(DIR.DS.'data'.DS.'business.php');	
	} else if($_GET['api'] == 'images'){
		header('Content-type: application/json;; charset=utf-8');
		include_once(DIR.DS.'data'.DS.'images.php');
	} else if($_GET['api'] == 'sites'){
		header('Content-type: application/json;; charset=utf-8');
		include_once(DIR.DS.'data'.DS.'sites.php');
	}else if($_GET['api'] == 'private'){
		header('Content-type: application/json;; charset=utf-8');
		include_once(DIR.DS.'data'.DS.'private.php');
	} else {
		header('Location: '.$sites['protocol'].'://'.$domainTLD);
		exit();
	}
} else {
	header('Location: '.$sites['protocol'].'://'.$domainTLD);
	exit();
}
?>