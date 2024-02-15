<?php include_once('includes/header.php');

	$currentURL = $_SERVER['REQUEST_URI'];
    $basePath = strpos($currentURL, '/pages/') !== false ? '../' : '';

    require_once($basePath . 'lib/functions.php');

    $pageTitle = getPageTitle($currentURL);
    echo "<title>Vikings Club - $pageTitle</title>";


?>

	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">GO VIKINGS</span> <span class="typed-words"></span></h1>

						
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="<?= $basePath ?>assets\img\home\home-logan.jpg" alt="Image" class="img-fluid active">
						<img src="<?= $basePath ?>assets\img\home\home-rico.JPG" alt="Image" class="img-fluid">
						<img src="<?= $basePath ?>assets\img\home\home-ecole_de_natation.jpg" alt="Image" class="img-fluid">
						<img src="<?= $basePath ?>assets\img\home\home-openwater.jpg" alt="Image" class="img-fluid">
						<img src="<?= $basePath ?>assets\img\home\home-forme_sante.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>	


	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Nos Services</h2>
					<p>Le Club des Vikings, un club pour tous et à tout âge !
						<br>
						Quel que soit votre profil, il y a toujours une activité qui vous correspond au Club des Vikings et nous sommes heureux de vous accueillir parmi nous !</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('<?= $basePath ?>assets/img/images/img2/competition2.jpeg');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="display-4 text-primary"><img src="<?= $basePath ?>assets/img/images/img2/aquagym_10191144.png" alt="NAGE FORME SANTÉ" height="80px"></span>
							<h3>NAGE FORME SANTÉ</h3>
							<p class="mb-0">Plongez vers bien-être et vitalité : découvrez notre programme Nage Forme et Santé, où chaque coup de nage mène vers une meilleure santé !</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="display-4 text-primary"><img src="<?= $basePath ?>assets/img/images/img2/exercise_12667522.png" alt="Natation course" height="80px"></span>
							<h3>NATATION COURSE</h3>
							<p class="mb-0">Plongez vers la victoire : rejoignez notre équipe de natation de course pour vivre vitesse, endurance et passion !</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="display-4 text-primary"><img src="<?= $basePath ?>assets/img/images/img2/sport_12667534.png" alt="ÉCOLE NATATION" height="80px"></span>
							<h3>ÉCOLE NATATION</h3>
							<p class="mb-0">Plongez dans l'apprentissage : notre école de natation promet découverte, progrès et amusement dans chaque longueur !</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="display-4 text-primary"><img src="<?= $basePath ?>assets/img/images/img2/game_12667472.png" alt="WATER POLO" height="80px"></span>
							<h3>WATER POLO</h3>
							<p class="mb-0">Plongez dans l'action et vivez l'intensité du water-polo : esprit d'équipe et frissons garantis !</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="untree_co-section count-numbers py-5">
		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="1432">0</span>
						</div>
						<span class="caption">No. De Licenciés</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="48">0</span>
						</div>
						<span class="caption">No. De Qualif JO</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="30">0</span>
						</div>
						<span class="caption">No. De Coupes</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="counter-wrap">
						<div class="counter">
							<span class="" data-number="120">0</span>
						</div>
						<span class="caption">No. De médailles</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">Évenements</h2></div>
			</div>

			<div class="owl-carousel owl-3-slider">

				<div class="item">
					<a class="media-thumb" href="<?= $basePath ?>assets\img\event\event-match_national_3-Rouen.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>MAtch national 3 - Waterpolo</h3>
							<span class="location">Rouen</span>
						</div>
						<img src="<?= $basePath ?>assets\img\event\event-match_national_3-Rouen.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="<?= $basePath ?>assets\img\event\event-championat_de_france-Greece.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Championat de France - Natation</h3>
							<span class="location">Greece</span>
						</div>
						<img src="<?= $basePath ?>assets\img\event\event-championat_de_france-Greece.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="<?= $basePath ?>assets\img\event\event-tournoi_U15-Granville.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Tournoi U15 - Waterpolo</h3>
							<span class="location">Granville</span>
						</div>
						<img src="<?= $basePath ?>assets\img\event\event-tournoi_U15-Granville.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>


				<div class="item">
					<a class="media-thumb" href="<?= $basePath ?>assets\img\event\event-championat_regional_natation-Rouen.jpg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Championat régional - Natation</h3>
							<span class="location">Rouen</span>
						</div>
						<img src="<?= $basePath ?>assets\img\event\event-championat_regional_natation-Rouen.jpg" alt="Image" class="img-fluid">
					</a> 
				</div>

				<div class="item">
					<a class="media-thumb" href="<?= $basePath ?>assets\img\event\event-championt_du_monde-Doha.jpeg" data-fancybox="gallery">
						<div class="media-text">
							<h3>Championat du monde - Eau libre</h3>
							<span class="location">Doha</span>
						</div>
						<img src="<?= $basePath ?>assets\img\event\event-championt_du_monde-Doha.jpeg" alt="Image" class="img-fluid">
					</a> 
				</div>


			</div>

		</div>
	</div>


	<div class="untree_co-section testimonial-section mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">Nos entraîneurs Vikings</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="<?= $basePath ?>assets\img\entraineur\entraineur_seb.png	" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Sébastien GANDELIN </h3>
							<blockquote>
								<p>Manager général du Club des Vikings</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="<?= $basePath ?>assets\img\entraineur\entraineur_ben.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Benjamin BRANTU</h3>
							<blockquote>
								<p>Entraineur Groupe Elite <br> Entraineur Groupe régional</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="<?= $basePath ?>assets\img\entraineur\entraineur_dorian.jpg" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Dorian ANTONIOTTI</h3>
							<blockquote>
								<p>Entraîneur du Club des Vikings</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	


	<div class="custom-block " data-aos="fade-up">
		<div class="container">
			<div class="partner_media">
				<h2 class="section-title text-center partner_title">Partenaire</h2>
			</div>
		</div>
		<div class="row gutter-v2 gallery">
			<div class="col-4">
				<!--  partenaire: Region Normandie -->
				<a href="https://www.normandie.fr/" class="gal-item" ><img src="<?= $basePath ?>assets\img\partenaire\partenaire-regionnormandie_colored.png" alt="Image" class="img-fluid"></a>
			</div>
			<div class="col-4">
				<!-- partenaire: Rouen Horizontal -->
				<a href="https://rouen.fr/" class="gal-item" ><img src="<?= $basePath ?>assets\img\partenaire\partenaire-rouen-horizontal-nb_colored.png" alt="Image" class="img-fluid"></a>
			</div>
			<div class="col-4">
				<!-- partenaire: Metropole Rouen Normandie -->
				<a href="https://www.metropole-rouen-normandie.fr/" class="gal-item" ><img src="<?= $basePath ?>assets\img\partenaire\partenaire-metropole_rouen_normandie_colored.png" alt="Image" class="img-fluid"></a>
			</div>	
			<div class="col-4">
				<!-- partenaire: CSM -->
				<a href="https://campus-saint-marc.com/" class="gal-item" ><img src="<?= $basePath ?>assets\img\partenaire\partenaire-csm_colored.png" alt="Image" class="img-fluid"></a>
			</div>
			<div class="col-4">
				<!-- partenaire: Arena -->
				<a href="https://www.arenasport.com/fr_fr/" class="gal-item" ><img src="<?= $basePath ?>assets\img\partenaire\partenaire-arena_bw.png" alt="Image" class="img-fluid"></a>
			</div>
			<div class="col-4">
				<!-- partenaire: 76sm -->
				<a href="https://www.seinemaritime.fr/" class="gal-item" ><img src="<?= $basePath ?>assets\img\partenaire\partenaire-76sm_colored.jpeg" alt="Image" class="img-fluid"></a>
			</div>
		</div>
	</div>
	<?php include_once('includes/footer.php'); ?>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?= $basePath ?>assets/js/popper.min.js"></script>
	<script src="<?= $basePath ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= $basePath ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= $basePath ?>assets/js/jquery.animateNumber.min.js"></script>
	<script src="<?= $basePath ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= $basePath ?>assets/js/jquery.fancybox.min.js"></script>
	<script src="<?= $basePath ?>assets/js/aos.js"></script>
	<script src="<?= $basePath ?>assets/js/moment.min.js"></script>
	<script src="<?= $basePath ?>assets/js/daterangepicker.js"></script>

	<script src="<?= $basePath ?>assets/js/typed.js"></script>
	<script src="<?= $basePath ?>assets/js/index.js"></script>

	<script src="<?= $basePath ?>assets/js/custom.js"></script>

</body>

</html>
