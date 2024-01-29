<?php
    // Connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root"; // Mettez le nom d'utilisateur de votre base de données MySQL
    $motdepasse = "root"; // Mettez le mot de passe de votre base de données MySQL
    $basededonnees = "voyages";

    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Connexion à la base de données MySQL
        $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

        // Vérification de la connexion
        if ($connexion->connect_error) {
            die("La connexion à la base de données a échoué : " . $connexion->connect_error);
        }

        // Préparation de la requête SQL pour insérer les données dans la table "Contact"
        $requete = "INSERT INTO Contact (name, email, message) VALUES (?, ?, ?)";

        // Préparation de la requête SQL
        $statement = $connexion->prepare($requete);

        // Liaison des paramètres avec les valeurs
        $statement->bind_param("sss", $nom, $email, $message);


    
        // Exécution de la requête préparée
        if ($statement->execute()) {
            // Redirection vers une autre page si nécessaire
            header("Location: confirmation.php"); // Remplacez confirmation.php par le nom de votre page de confirmation
            exit(); // Assurez-vous de terminer le script après la redirection
        } else {
            echo "Une erreur s'est produite lors de l'enregistrement des données.";
        }

        // Fermeture de la requête et de la connexion
        $statement->close();
        $connexion->close();
    } else {
        echo "Erreur : Le formulaire n'a pas été soumis.";
    }
?>


