<!-- footer o -->
<!DOCTYPE html>

    <?php
        $currentURL = $_SERVER['REQUEST_URI'];
        $basePath = strpos($currentURL, '/pages/') !== false ? '../' : '';
        $ifcontact = strpos($currentURL, 'contact.php') !== false ? 1 : 0;

        require_once($basePath . 'lib/functions.php');

        $pageTitle = getPageTitle($currentURL);
        echo "<title>Vikings Club - $pageTitle</title>";
    ?>

    <?php if ($ifcontact == 0) { ?>
        <div class="py-5 cta-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="mb-2 text-white">Explorez le meilleur. Contactez-nous maintenant</h2>
                        <p class="mb-4 lead text-white text-white-opacity">##</p>
                        <p class="mb-0"><a href="<?= $basePath ?>pages/contact.php" class="btn btn-outline-white text-white btn-md font-weight-bold">Contactez-nous</a></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="site-footer">
        <div class="inner first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">Club des Vikings de Rouen.</h3>
                            <p>Piscine de l'ile Lacroix.</p>
                        </div>
                        <div class="widget">
                            <ul class="list-unstyled social">
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 pl-lg-5">
                        <div class="widget">
                            <h3 class="heading">Pages</h3>
                            <ul class="links list-unstyled">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">À propos</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget">
                            <h3 class="heading">Contact</h3>
                            <ul class="list-unstyled quick-info links">
                                <li class="email"><a href="#">mail@example.com</a></li>
                                <li class="phone"><a href="#">+33 9 50 52 93 14</a></li>
                                <li class="address"><a href="#">Centre sportif Guy Boissière, Avenue Jacques chastellain, 76100 Rouen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="inner dark">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 mb-3 mb-md-0 mx-auto">
                        <p>&copy; 2024 Vikings Club. Tous droits réservés.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
