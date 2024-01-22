<?php include_once('includes/header.php');

if (isset($_GET['success']) && $_GET['success'] == 'true') {
    echo "<script>alert('Message envoyé avec succès.');</script>";
} elseif (isset($_GET['success']) && $_GET['success'] == 'false') {
    echo "<script>alert('Une erreur s\'est produite lors de l\'envoi du message. Veuillez réessayer plus tard.');</script>";
}

?>

<?php include_once('includes/footer.php'); ?>
