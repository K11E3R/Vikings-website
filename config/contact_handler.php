<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
    $subject = "Formulaire de contact"; 
    $message = htmlspecialchars($_POST["message"]);

    $to = "prs.online.00@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    $mailBody = "Nom: $firstName $lastName\nEmail: $email\nTéléphone: $phoneNumber\nSujet: $subject\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        $alertMessage = "Votre message a été envoyé avec succès.";
        $redirectPage = "../index.php?success=true";
    } else {
        $alertMessage = "Désolé, une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer plus tard.";
        $redirectPage = "../index.php?success=false";
    }

    header("Location: $redirectPage");
    exit;
}
?>
