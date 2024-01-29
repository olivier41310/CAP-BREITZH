<?php include('includes/header.php'); ?>
    <!-- Contenu de la page contact-->

    <section id="page-titre" class="overlay">

        <h1>Contactez nous </h1>
        <div class="vague"></div>
    </section>
    <?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root"; // Mettez le nom d'utilisateur de votre base de données MySQL
$motdepasse = "root"; // Mettez le mot de passe de votre base de données MySQL
$basededonnees = "voyages";

// Connexion à la base de données MySQL
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Préparation de la requête SQL pour insérer les données dans la table "Contact"
    $requete = "INSERT INTO Contact (name, email, message) VALUES (?, ?, ?)";

    // Préparation de la requête SQL
    $statement = $connexion->prepare($requete);

    // Liaison des paramètres avec les valeurs
    $statement->bind_param("sss", $nom, $email, $message);

    // Exécution de la requête préparée
    if ($statement->execute()) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }

    // Fermeture de la requête et de la connexion
    $statement->close();
    $connexion->close();
}
?>

    <section id="page-contact">
        <div class="container">
            <div class="row">
                <!-- 2 blocs : 2 colonnes -->

                <div class="col offset-md-1">
                    <div class="presentation">
                        <h4>Restons en contact</h4>
                        <h3>Obtenez plus d'informations</h3>
                      
                    </div>

                    <form action="validation-contact.php" method="POST" class="my-5">
                        <input type="text" name="nom" placeholder="Votre nom" class="form-control mb-3" required>
                        <input type="email" name="email" placeholder="Votre email" class="form-control mb-3" required>
                        <textarea name="message" rows="7" placeholder="Votre message" class="form-control mb-3" required></textarea>
                        <input type="submit" class="btn btn-danger btn-lg">
                    </form>
                </div>
                <div class="col"> 

                    <h5 class="mb-3">Une question ?? N'hésitez pas à nous contacter !</h5>
                    <p>Tous nos services se mettrons en quatre pour vous apporter les meilleurs réponses</p>
                    <p>Parce que notre souhait est que vous viviez les meilleurs expériences et vos plus beaux souvenirs</p>

                    <table class="table mt-5">
                        <tr>
                            <td><i class="bi bi-signpost-2-fill"></i></td>
                            <td><b>Coordonnées</b> <br> 31 rue de la république 22300 LANNION</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope-paper-fill"></td>
                            <td><b>Adresse Email</b> <br> contact@cap_breizh.com</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-telephone-outbound-fill"></td>
                            <td><b>Téléphone</b> <br> Fixe :02 23 45 67 89 / Mobile : 06 01 02 03 04</td>
                        </tr>
                    </table>
                    
                   <div class="social">
                    <h5 class="mb-3">Suivez  nous sur les réseaux sociaux</h5>
                    <ul class="d-flex">
                        <li><i class="bi bi-facebook"></i></li>
                        <li><i class="bi bi-twitter"></i></li>
                        <li><i class="bi bi-instagram"></i></li>
                        <li><i class="bi bi-linkedin"></i></li>
                    </ul>
                   </div>
                </div>
            </div>
        </div>

    </section>
    <section id="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42094.4920350415!2d-3.5109383614420104!3d48.74549710500438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48122b8ac523c539%3A0x40ca5cd36e63400!2s22300%20Lannion!5e0!3m2!1sfr!2sfr!4v1706340026953!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

<?php include('includes/footer.php');?>