<?php include_once('../includes/header.php'); ?>

<div class="container">
    <div class="wrapper">
        <div class="company-info">
            <h3>Club des Vikings de Rouen</h3>
            <ul id="contact_ul">
                <li><i class="fa fa-road"></i> Centre sportif Guy Boissière, piscine de l'île Lacroix, avenue Jacques Chastellain, 76100 Rouen</li><br>
                <li><i class="fa fa-phone"></i> 09 50 52 93 14</li><br>
                <li><i class="fa fa-envelope"></i> ClubVikings@contact.com</li>
            </ul>
        </div>

        <div class="contact">
            <h3>Contactez-nous</h3>
            <form id="contact-form" method="post" action="../config/contact-handler.php">
                <p>
                    <label>Nom</label>
                    <input type="text" name="firstName" id="firstName" required>
                </p>
                <p>
                    <label>Prénom</label>
                    <input type="text" name="lastname" id="lastname" required>
                </p>
                <p>
                    <label>Adresse e-mail</label>
                    <input type="email" name="email" id="email" required>
                </p>
                <p>
                    <label>Numéro de téléphone</label>
                    <input type="text" name="phoneNumber" id="phoneNumber">
                </p>
                <p class="full">
                    <label>Message</label>
                    <textarea name="message" rows="5" id="message" required></textarea>
                </p>
                <p class="full">
                    <button type="submit">Envoyer</button>
                </p>
            </form>
        </div>
    </div>
</div>

<?php include_once('../includes/footer.php'); ?>
