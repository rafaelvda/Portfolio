<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Portfolio</title>
    </head>
    <body>
        <?php require 'header.php'?>

        <section class="couv">
            <div class="welcome">
                <h1 class="title">Hello World</h1>
                <h1 class="sub">Bienvenue
                    <span
                            class="txt-rotate"
                            data-period="2000"
                            data-rotate='[ "sur mon Portfolio.", " :)"]'>
                    </span>
                </h1>
            </div>
        </section>

        <section class="propos" id="propos">
            <div class="media">
                <img src="Images/be2678f64053690f2f89ce88af36e6f5-sticker.png" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                    <h1 class="mt-0">A PROPOS</h1>
                    <p>Bonjour à tous, je m'appelle Rafael Mico, je suis né le 29-12-2001 et je termine actuellement mon BTS SIO (Services Informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métiers) à l'Ecole Nationale de Commerce Bessières, Paris 17. À la rentrée prochaine de 2021, j'aurais la chance d'intégrer le CNAM en Licence Professionnelle Informatique Web Mobile et Business Intelligence en alternance. J'ai pour projet de me spécialiser en développement ou en data pour ainsi pouvoir continuer mes études en master.</p>
                    <div class="btns">
                        <div class="btn">
                            <a href="Images/CV 2.1.pdf" download><button type="button" class="btn btn-outline-secondary"">Télécharger mon CV</button></a>
                        </div>
                        <div class="btn">
                            <a class="nav-link" href="#contact">
                                <button type="button" class="btn btn-outline-secondary">Me contacter</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ppe">
            <div class="droite">
                <img src="Icons/021-portfolio.png">
                <h1>PPE 1er Année</h1>
                <a href="1PPE.php">
                    <button type="button" class="btn btn-dark btn-lg">En savoir plus</button>
                </a>
            </div>
            <div class="gauche">
                <img src="Icons/030-desk.png">
                <h1>PPE 2ème Année</h1>
                <a href="2PPE.php">
                    <button type="button" class="btn btn-dark btn-lg">En savoir plus</button>
                </a>
            </div>
        </section>

        <section class="stages">
            <div class="uneAn">
                <a href="1STAGE.php">
                    <button type="button" class="btn btn-dark btn-lg">1er Année</button>
                </a>
            </div>
            <div class="stage">
                <h1 class="stageTitre">STAGES</h1>
            </div>
            <div class="deuxAn">
                <a href="2STAGE.php">
                    <button type="button" class="btn btn-dark btn-lg">2ème Année</button>
                </a>
            </div>
        </section>

        <!--<section class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/cyber-3400789_1280.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1>VEILLE TECHNOLOGIQUE</h1>
                            <a href="VT.php">
                                <button type="button" class="btn btn-outline-light">En savoir plus</button>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/gavel-3577254_1280.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1>VEILLE JURIDIQUE</h1>
                            <a href="VJ.php">
                                <button type="button" class="btn btn-outline-light">En savoir plus</button>
                            </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>-->

        <section class="contact" id="contact">
            <div class="image">
                <img src="Images/contact.jpg" alt="photo jolie">
            </div>
            <div class="formulaire">
                <form class="formContact" method="post">
                    <h1 class="titleContact">ME CONTACTER</h1>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Prénom" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="validationDefault02" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <input type="email" name="email" class="form-control" id="validationDefault03" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <textarea name="message" class="form-control" id="validationDefault03" placeholder="Message" required></textarea><br>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                        Envoyer
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Félicitations </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Votre message à bien été envoyer !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <?php require 'email.php'?>

        <?php require 'footer.php'?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="js.js"></script>
    </body>
</html>
