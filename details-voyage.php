<?php include('includes/header.php'); ?>
    <section id="page-titre" class="overlay">
    
        <h1>LE GUILVINEC</h1>
        <div class="vague"></div>
    </section>
    <!-- Contenu de la page details des voyages-->

    <main class="container">
        <div class="row">
            <section class="col-7 offset-md-1" id="details-sejour">
                <h2>Le port de pêche et la criée </h2>
                <img src="images/2014-08-07_16-39-23_241.jpg" alt="" class="img-fluid">
                <div class="details">
                    <ul class="d-flex justify-content-center">
                        <li><i class="bi bi-clock"></i> 5J/4N |</li>
                        <li><i class="bi bi-people-fill"></i> Nombre de personnes : 4 |</li>
                        <li><i class="bi bi-geo-alt-fill"></i> Le Guilvinec</li>
                    </ul>
                </div>
                
                <div id="tabs" class="my-5">
                    <ul>
                        <li> <a href="#tab1">Description</a></li>
                        <li><a href="#tab2">Programme</a></li>
                        <li><a href="#tab3">Commentaire</a></li>
                        <li><a href="#tab4">Carte</a></li>
                    </ul>
                    <div id="tab1">
                        <p>Né il y a plus d’un siècle d’une petite colonie de pêcheurs, Le Guilvinec est le 1er port français de pêche artisanale (côtière et petite pêche) Il est identifié comme « cœur de la pêche ». La pêche artisanale concerne surtout les bateaux entre 12 et 16 mètres et le patron est généralement propriétaire de son bateau.
                        </p>
                        <p>Il est le 3ème port français, après Boulogne-sur-Mer et Lorient, toutes pêches confondues (hauturière, côtière et petite pêche).
                        </p>
                        
                        <ul>
                            <li class="text-dark"><i class="bi bi-check"></i> Le port du Guilvinec - Léchiagat est en perpétuelle évolution. Ses équipements portuaires sont là pour en témoigner.</li>
                            <li class="text-dark"><i class="bi bi-check"></i> La qualité optimum est une motivation constante pour tous les acteurs de la filière pêche - marins-pêcheurs, Lycée Professionnel Maritime, CCI, mareyeurs, transformateurs, chantiers navals - qui oeuvrent en ce sens.</li>
                            <li class="text-dark"><i class="bi bi-check"></i> Tous les services nécessaires au bon fonctionnement de l’activité portuaire se trouvent sur place ou à proximité.</li>
                            <li class="text-dark"><i class="bi bi-check"></i> Les curieux viennent des quatre coins du monde pour vivre l’ambiance particulière qui se crée sur les quais au moment du débarquement de la pêche.</li>
                            <li class="text-dark"><i class="bi bi-check"></i> Situé au fond du port de pêche, l'espace plaisance est un abri de choix entre la Baie de Concarneau et la Baie d’Audierne.</li>
                        </ul>
                    </div>
                    <div id="tab2">
                        <p>La rentrée des bateaux au port en fin d’après-midi est un moment fort, car beaucoup ici vivent de la mer, directement ou indirectement : marins bien sûr, mais aussi mareyeurs, poissonniers, dockers, employés de marée, charpentiers marine, forgerons, électriciens, électroniciens, etc., tous ces corps de métiers s’articulent autour du port et des bateaux.</p>
                    </div>
                    <div id="tab3">

                        <div>
                            <!-- Affichage des commentaires-->
                            
                        <?php /*

                        $bdd = mysqli_connect('localhost','root','root','voyages');

                        $sql = 'SELECT *  FROM commentaires ORDER BY date_commentaire DESC LIMIT 3';

                        $resultat = $bdd -> query($sql);

                        while($data = mysqli_fetch_array($resultat)){

                            echo '
                                <article class="commentaires">
                                    <span>'
                                    .$data['nom']
                                    .' '
                                    .$data['prenom']
                                    .'</span>
                                    <span>'
                                    .$data['date_commentaire'] 
                                    .'</span>

                                    <h5 class="mt-3">'.$data['sujet'].'</h5>
                                    <p>'.$data['commentaire'].'</p>

                                    <a href="#" class="btn btn-danger text-white">Retour</a>
                                </article>
                            
                            ';
                        }
                        mysqli_close($bdd);
                        */
                        ?>
                        
                        </div>

                        <div>
                            <!--Affichage du formulaire pour ajouter un commentaire -->
                            <h4 class="my-5">Laissez un commentaire</h4>

                            <form action="validation-commentaires.php" method="POST">
                                <input type="text" placeholder="Votre nom" name="nom" class="form-control my-3">
                                <input type="text" placeholder="Votre prénom" name="prenom" class="form-control my-3">
                                <input type="email" placeholder="Votre Email" name="email" class="form-control my-3">
                                <input type="text" placeholder="Sujet" name="sujet" class="form-control my-3">
                                <textarea placeholder="Votre commentaire" name="commentaire" class="form-control my-3" rows="8"></textarea>
                                <input type="submit" value="Je valide !" class="btn btn-success">
                            </form>

                        </div>

                    </div>
                    <div id="tab4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2680.3126573330987!2d-4.280909523163373!3d47.79477467496359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x481730efdc0d7e33%3A0xd9b34f9b1b0461d!2sPort%20du%20Guilvinec-Treffiagat!5e0!3m2!1sfr!2sfr!4v1706513203620!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>

            </section>
            <aside class="col-3">
                barre laterale droite à définir
            </aside>
        </div>
    </main>

        
            
       
<?php include('includes/footer.php');?>