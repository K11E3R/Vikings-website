<?php include_once('../includes/header.php'); 

	$currentURL = $_SERVER['REQUEST_URI'];
        $basePath = strpos($currentURL, '/pages/') !== false ? '../' : '';

        require_once($basePath . 'lib/functions.php');

        $pageTitle = getPageTitle($currentURL);
        echo "<title>Vikings Club - $pageTitle</title>";


?>

    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Contactez-nous</h1>
                        <p class="text-white">Pour toute demande d'information ou de partenariat, n'hésitez pas à nous contacter. Nous sommes là pour répondre à vos questions et vous aider à plonger dans l'univers passionnant du water-polo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="fname">Prénom</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Nom</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black" for="email">Adresse e-mail</label>
                            <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Envoyer le message</button>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-house"></span>
                        <address class="text">
                            Centre sportif Guy Boissière, Avenue Jacques chastellain, 76100 Rouen
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-phone-call"></span>
                        <address class="text">
                            +33 9 50 52 93 14
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-mail"></span>
                        <address class="text">
                            clubvikingsrouen@gmail.com
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include_once('../includes/footer.php'); ?>

    <script src="<?=$basePath?><?=$basePath?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?=$basePath?>assets/js/popper.min.js"></script>
    <script src="<?=$basePath?>assets/js/bootstrap.min.js"></script>
    <script src="<?=$basePath?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=$basePath?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?=$basePath?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?=$basePath?>assets/js/jquery.fancybox.min.js"></script>
    <script src="<?=$basePath?>assets/js/aos.js"></script>
    <script src="<?=$basePath?>assets/js/moment.min.js"></script>
    <script src="<?=$basePath?>assets/js/daterangepicker.js"></script>

    <script src="<?=$basePath?>assets/js/typed.js"></script>
    <script src="<?=$basePath?>assets/js/custom.js"></script>
    

</body>
</html>