
<!doctype html>


<html lang="en">
<head>
	
	<?php
		$currentURL = $_SERVER['REQUEST_URI'];
		$basePath = strpos($currentURL, '/pages/') !== false ? '../' : '';
		
		require_once($basePath . 'lib/functions.php');

		$pageTitle = getPageTitle($currentURL);
		echo "<title>Vikings Club - $pageTitle</title>";
	?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Vikings Club">
	<link rel="shortcut icon" href="<?= $basePath ?>assets\img\main-logo\logo_club_vikings.png">

	<meta name="description" content="Club Vikings Rouen 🌊" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/writing-signature" rel="stylesheet">

                
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/fonts/icomoon/style.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/daterangepicker.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/aos.css">
	<link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">

</head>
<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="<?= $basePath ?>index.php" class="logo m-0"><img class="logo-img" src="<?= $basePath ?>assets\img\main-logo\logo_club_vikings.png" alt="Vikings"></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="<?= $basePath ?>index.php">ACCUEIL</a></li>
					<li class="has-children">
						<a href="#">LE CLUB</a>
						<ul class="dropdown">
							<li><a href="<?= $basePath ?>pages\histoire.php">Histoire</a></li> <!-- to change ! -->	
							<li><a href="<?= $basePath ?>pages\structure-sportive.php">Structures Sportives</a></li>
							<li><a href="<?= $basePath ?>pages\comite-de-direction.php">Comite de direction</a></li>
							<li class="has-children">
								<a href="#">Sport Etude</a>
								<ul class="dropdown">
									<li><a href="<?= $basePath ?>pages\la-caf.php">Le Caf</a></li>
									<li><a href="<?= $basePath ?>pages\candidature-elite.php">Condidature elite</a></li>
									<li><a href="<?= $basePath ?>pages\classe-natation.php">Classe natation</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="<?= $basePath ?>pages/users.php">ACTIVITÉS</a></li>
					<li><a href="https://vikingsderouen.swim-community.fr/Pages/Login.aspx" target="_blank">INSCRIPTIONS</a></li>
					<li><a href="<?= $basePath ?>pages/shop.php">BOUTIQUE</a></li>
					<li><a href="<?= $basePath ?>pages/contact.php">CONTACT</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>
<!-- header e -->