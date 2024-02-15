<?php
/* HEADER functions */
// Function to determine page title based on the current URL
function getPageTitle($currentURL) {
    $pages = [
        'index.php' => 'Acceuil',
        'club.php' => 'Le Club',
        'activity.php' => 'Activité',
        'partners.php' => 'Partenaire',
        'shop.php' => 'Boutique',
        'contact.php' => 'Contact',
        'users.php' => 'Users',
        'histoire.php' => 'Histoire',
        'structure-sportive.php' => 'Structure Sportive',
        'comite-de-direction.php' => 'Comité Directeur',
        'la-caf' => 'La CAF',
        'classe-natation.php' => 'Classe Natation',
        'candidature-elite.php' => 'Candidature Elite',
    ];

    foreach ($pages as $page => $title) {
        if (strpos($currentURL, $page) !== false) {
            return $title;
        }
    }

    return '';
}
/* HEADER end functions */
?>
