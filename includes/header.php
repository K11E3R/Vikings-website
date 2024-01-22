<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $currentURL = $_SERVER['REQUEST_URI'];
    $basePath = strpos($currentURL, '/pages/') !== false ? '../' : '';

    require_once($basePath . 'lib/functions.php');

    $pageTitle = getPageTitle($currentURL);
    echo "<title>Vikings Club - $pageTitle</title>";
    ?>

    <link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css">
    <link rel="icon" href="<?= $basePath ?>assets/img/logo_nobg.svg" type="image/svg+xml">
</head>
<body>
    <div id="logo_nav">
        <div class="logo">
            <img src="<?= $basePath ?>assets/img/logo_bg_in-PhotoRoom.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <?php
                // Navigation items
                $navItems = array(
                    'Acceuil' => 'index.php',
                    'Le Club' => 'pages/club.php',
                    'Activité' => 'pages/activity.php',
                    'Partenaire' => 'pages/partners.php',
                    'Boutique' => 'pages/shop.php',
                    'Contact' => 'pages/contact.php',
                    'Users' => 'pages/users.php'
                );

                // Output navigation items
                foreach ($navItems as $label => $url) {
                    $isActive = strpos($currentURL, $url) !== false;
                    echo '<li><a href="' . $basePath . $url . '">' . $label . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
    <h1>Go Vikings</h1>

<!-- header e -->