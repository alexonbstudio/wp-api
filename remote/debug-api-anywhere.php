<?php
/*
################################################################
	Copyright (c) 2020 AlexonbStudio
	author: Alexon Balangue
	Dubug your website with Json
	Tools: Debug API anywhere unlimited - no resctriction data
	To be present our futur website - Pool*²
	Why? Keep Your websute in speed than javascript code for ecologic ressources
	Here is html WITH php DEV
################################################################
*/
error_reporting(E_ALL);
ini_set("display_errors", 1);

# Put your website here
$domain = 'alexonbstudio.yo.fr';

#Decode
$sites = json_decode(file_get_contents('https://'.$domain .'/api/sites.json'), true);
$private = json_decode(file_get_contents('https://'.$domain .'/api/private.json'), true);
$images = json_decode(file_get_contents('https://'.$domain .'/api/images.json'), true);
$business = json_decode(file_get_contents('https://'.$domain .'/api/business.json'), true);

if(isset($_GET['api'])){
	if($_GET['api'] == 'business'){
		header('Content-type: application/json;; charset=utf-8');
		var_dump($business);
	} else if($_GET['api'] == 'images'){
		header('Content-type: application/json;; charset=utf-8');
		var_dump($images);
	} else if($_GET['api'] == 'sites'){
		header('Content-type: application/json;; charset=utf-8');
		var_dump($sites);
	}else if($_GET['api'] == 'private'){
		header('Content-type: application/json;; charset=utf-8');
		var_dump($private);
	} else {
		header('Location: '.$sites['protocol'].'://'.$domain);
		exit();
	}
} else {

# Next HTML
?>
	<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="robots" content="nofollow, noindex, noarchive">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<?php if(!empty($sites['domain']) OR isset($sites['domain'])){ ?>
				<title><?php echo $sites['name']; ?> - Debug API (Remote)</title>
				<link rel="shortcut icon" type="image/x-icon" href="<?php echo $sites['protocol'].'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['small']; ?>">
				<link rel="icon" href="<?php echo $sites['protocol'].'://'.$sites['domain'].'/'.$images['dir'].'/'.$images['manager']['logo']['icon']; ?>">
			<?php } else { ?>
				<title><?php echo $domain; ?> - Not use Debug API (Remote)</title>
			<?php } ?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
			<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
			
			<style>body{padding-top:5rem;}.starter-template{padding:3rem 1.5rem;text-align:center;}</style>
		</head>
		<body>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
				<a class="navbar-brand" href="#">Tools Remote</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarsExampleDefault">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="//<?php echo $domain; ?>">Return on <span class="sr-only"><i class="far fa-home fa-2x"></i></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://github.com/alexonbstudio/website-project">Get Your Showcast Site</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://github.com/alexonbstudio/wp-api">Get Your API DATA</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">By AlexonbStudio</a>
						</li>
					</ul>
				</div>
			</nav>
			<main role="main" class="container">
				<div class="starter-template">
					<h1>Debug API (REMOTE)</h1>
					<p class="lead">This tools to test your own tools for Json debug api<br>To be present to diffente Pool*² on @alexonbstudio <br>Your compagny Name business international Or Non Profit Caritative & more<br>Be simple &amp; is simple.</p>
				</div>			
				<div class="container">
					<div class="row">				
						<div class="col-12 col-4">
							<p class="text-center"><a href="//<?php echo preg_replace('/www./i', '', $_SERVER['SERVER_NAME']); ?>/debug-api-anywhere.php?api=sites" target="_blank" class="btn btn-lg btn-info"><i class="fas fa-link fa-4x"></i> SITES info</a></p>
						</div>			
						<div class="col-12 col-4">
							<p class="text-center"><a href="//<?php echo preg_replace('/www./i', '', $_SERVER['SERVER_NAME']); ?>/debug-api-anywhere.php?api=private" target="_blank" class="btn btn-lg btn-info"><i class="fas fa-user-check fa-4x"></i> private info</a></p>
						</div>			
						<div class="col-12 col-4">
							<p class="text-center"><a href="//<?php echo preg_replace('/www./i', '', $_SERVER['SERVER_NAME']); ?>/debug-api-anywhere.php?api=images" target="_blank" class="btn btn-lg btn-info"><i class="fas fa-images fa-4x"></i> images info</a></p>
						</div>			
						<div class="col-12 col-4">
							<p class="text-center"><a href="//<?php echo preg_replace('/www./i', '', $_SERVER['SERVER_NAME']); ?>/debug-api-anywhere.php?api=business" target="_blank" class="btn btn-lg btn-info"><i class="fas fa-user-tie fa-4x"></i> business info</a></p>
						</div>
					</div>
				</div>			
			</main>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>
		</body>
	</html>
<?php } ?>