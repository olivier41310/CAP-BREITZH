<?php include('includes/header.php'); 


?>
    <section id="caroussel">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/20200820_100516.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">La côte de granit rose</h5>
                        <p>Respirez, vous êtes en Bretagne ! Des paysages à couper le souffle.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-banner-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1 text-white">Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </section>
    <section id="populaires"> 
        <div class="container">        
            <form action="" method="GET" class="mb-5">
                <div class="row">
                    <div class="col-sm-12 col-md-2 offset-md-1">
                        <label for="destination" class="form-label">Rechercher Destination*</label>
                        <input type="text" class="form-control" id="destination" placeholder="Mots clés" required>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="nombre-personnes" class="form-label">Nombre de personnes*</label>
                        <input type="number" class="form-control" id="nombre-personnes" placeholder="Nombre de personnes" required>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="date-arrivee" class="form-label">Date d'arrivée*</label>
                        <input type="date" class="form-control" id="date-arrivee" placeholder="JJ / MM / AA" required>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <label for="date-depart" class="form-label">Date de départ*</label>
                        <input type="date" class="form-control" id="date-depart" placeholder="JJ / MM / AA" required>
                    </div>
                    <div class="col-sm-12 col-md-2 ">  
                        
                        <input type="submit" class="form-control btn btn-danger mt-4" value="Valider">
                    </div>
                </div>

            </form>
            <div class="row">
                <div class="col offset-md-1">
                  <h4>Destinations populaires</h4>  
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-5 offset-md-1">
                    <h3>Top 10 Destinations</h3>
                </div>
                <div class="col-md-5 text-center">
                    <p>Voici les destinations qui rencontrent le plus de succés auprès de nos voyageurs. Et ce n'est pas un hasard ! Retrouvez ici les coins de Bretagne les plus typiques</p>
                </div>

            </div>
            <div class="row gy-md-5">
                <div class="col-md-3 offset-md-1 destinations">
                    <figure>
                        <img src="images/2014-08-07_16-48-02_648.jpg" alt="">
                    </figure>
                    <div class="cat">
                        <a href="details-voyage.php" class="btn btn-primary">Le GUILVINEC</a>
                    </div>
                    <div class="city">
                        <h5>Port de pêche</h5>
                         
                    </div>
                </div>
                <div class="col-md-3 destinations">
                    <figure>
                        <img src="images/2014-08-07_11-43-09_993.jpg" alt="">
                    </figure>
                    <div class="cat">
                        <a href="#" class="btn btn-primary">TREBEURDEN</a>
                    </div>
                    <div class="city">
                        <h5>Sentier des douaniers</h5>
                       
                    </div>                    
                </div>
                <div class="col-md-4 img-lg">
                    <div class="destinations">
                        <figure>
                            <img src="images/20200820_100516.jpg" alt="">
                        </figure>
                        <div class="cat2">
                            <a href="#" class="btn btn-primary">LANNION</a>
                        </div>
                        <div class="city2">
                            <h5>Le grand air</h5>
                            
                        </div>
                    </div>
                    <div class="destinations">
                    <figure>
                        <img src="images/20190923_165256.jpg" alt="">
                    </figure>
                    <div class="cat2">
                        <a href="#" class="btn btn-primary">PLEUMEUR BODOU</a>
                    </div>
                    <div class="city2">
                        <h5>Parc du Radôme</h5>
                        
                    </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>            
            <div class="text-center mt-5 mb-5">
                <a href="#" class="btn btn-danger btn-lg">PLUS DE DESTINATIONS</a>
            </div>

            <div class="text-center presentation">
                <h4>Explorez des lieux inoubliables</h4>
                <h3>Lieux les plus visités</h3>
                <p>Retrouvez ici le top des visites. Les 10 lieux incontournables de Bretagne, de Saint MALO à BREST et de QUIMPER à VANNES</p>
            </div>
            
            </div>
            <div class="text-center mt-5 mb-5">
                <a href="#" class="btn btn-danger btn-lg">PLUS DE VOYAGES</a>
            </div>


        </div>
    </section>
    
    <section id="chiffres" class="hidden">
        <div class="container-fluid">

            <div class="row">

                <div class="col-4"></div>
                <div class="col-8 bleu">                    

                    <div class="text-center presentation">
                        <h4>Mieux q'un grand discours</h4>
                        <h3>Les chiffres sont là !</h3>
                        <p>Votre satisfaction fait la notre ! Et c'est pour cela que nous nous battons tous les jours pour vous offrir vos plus beaux souvenirs</p>
                        <table>
                            <tr class="first">
                                <td class="icones"><i class="bi bi-people"></i></td>
                                <td class="nombres"><span>500K+</span><br>Clients satisfaits</td>
                                <td><i class="bi bi-diamond"></i></td>
                                <td><span>250K+</span><br>Clients satisfaits</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-person-plus"></i></td>
                                <td><span>500K+</span><br>Clients satisfaits</td>
                                <td><i class="bi bi-map"></i></td>
                                <td><span>10K+</span><br>Clients satisfaits</td>
                            </tr>
                        </table>
                    </div>

                    <img src="images/img8.jpg" alt="">

                    <div class="phone">
                        <div class="icon"><i class="bi bi-telephone"></i></div>
                        <div>
                            <p>Appelez nous !</p>
                            <h6>Tel:02 23 45 67 89</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="activites">
        <div class="container">
            <div class="text-center presentation">
                <h4>Voyage par activité</h4>
                <h3>Aventure & activités</h3>
                <p>Vous pouvez randonner sur la côte par le sentier des douaniers. Mais savez vous qu'il existe plein d'autres activités dans le coeur de notre territoire</p>
            </div>
            <div class="row gy-3">
                <div class="col offset-md-1">
                    <a href="#">
                        <img src="images/icon6.png" alt="Categorie Aventure">
                    </a>
                    <h5>Aventures</h5>
                    <span>15 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon7.png" alt="Categorie Trekking">
                    </a>
                    <h5>Trekking</h5>
                    <span>12 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon8.png" alt="Categorie Feu de camp">
                    </a>
                    <h5>Feu de camp</h5>
                    <span>7 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon9.png" alt="Categorie Sur les routes">
                    </a>
                    <h5>Sur les routes</h5>
                    <span>15 Destinations</span>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="images/icon10.png" alt="Categorie Camping">
                    </a>
                    <h5>Camping</h5>
                    <span>13 Destinations</span>
                </div>
                <div class="col pe-md-5">
                    <a href="#">
                        <img src="images/icon11.png" alt="Categorie Explorer">
                    </a>
                    <h5>Explorer</h5>
                    <span>25 Destinations</span>
                </div>
                
            </div>

        </div>
    </section>
    <section id="galerie">

        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-1 presentation d-flex flex-column justify-content-around">                    
                        <h4>Galerie de voyages</h4>
                        <h3>VOS SOUVENIRS</h3>
                        <p>N'hesitez pas à nous faire parvenir vos plus belles photos de sejour avec nos formules. Et tentez de remporter une nouvelle villégiature avec le plus beau cliché du mois !</p>
                        <img src="images/HPIM0825.JPG" alt="Randonnée en forêt"  class="img-fluid">                    
                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <figure class="col-6">
                            <img src="images/HPIM2269.JPG" alt="" class="img-fluid">
                        </figure>
                        <figure class="col-6">
                            <img src="images/HPIM2271.JPG" alt=""  class="img-fluid">
                        </figure>
                        <figure class="col-12">
                            <img src="images/20210825_111237.jpg" alt=""  class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="action">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-10 offset-md-1 d-flex justify-content-around marques py-5 hidden">
                    <img src="images/logo5.png" alt="">
                    <img src="images/logo2.png" alt="">
                    <img src="images/logo3.png" alt="">
                    <img src="images/logo4.png" alt="">
                    <img src="images/logo5.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12  offset-md-1 presentation">
                    <h4>Newsletter</h4>
                    <h3>INFORMEZ VOUS !</h3>
                    <p>Vous voulez être averti des toutes dernières destinations, des tendances et des bons plans de dernière minute ?</p>

                    <form action="" method="POST" class="d-flex justify-content-between my-3">
                        
                            <input type="email" placeholder="Entrez votre email" class="form-control">
                        
                            <input type="submit" class="btn btn-danger" value="Je m'abonne !">                       

                    </form>

                    <p>Inscrivez vous à notre newsletter et soyez les premiers informés !</p>
                </div>
            </div>

            </div>

        </div>

    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-md-1 hidden">
                    <img src="images/img24.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 col-sm-12 contact-infos">
                    <div class="row contact-row">

                        <div class="col">
                            <img src="images/icon12.png" alt="" class="icon-contact">
                            <ul>
                                <li>contact@cap_breizh.com</li>
                               
                            </ul>
                        </div>
                        <div class="col">
                            <img src="images/icon13.png" alt="" class="icon-contact">
                            <ul>
                                <li>02 23 45 67 89</li>
                                
                            </ul>
                        </div>
                        <div class="col">
                            <img src="images/icon14.png" alt="" class="icon-contact">
                            <ul>
                                <li>31 rue de la république 22300 LANNION</li>
                               
                            </ul>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between my-3 contact-action">
                        <h4> Rejoignez nous pour rester informé !!</h4>
                        <a class="btn btn-danger" href="#">Valider</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>