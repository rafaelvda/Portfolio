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
        <!--
                <section class="couv">
                    <h1 class="title">Hello World</h1>
                    <h2 class="sub">Bienvenue sur mon portfolio</h2>
                </section>
        -->
                <section class="couv">
                    <div class="title">
                        <p class="sub"></p>
                    </div>
                </section>

        <section class="propos">
            <div class="media">
                <img src="Images/1273B8BC-9E4C-4025-AAE4-CBB80E6995D7.JPG" class="align-self-center mr-3" alt="...">
                <div class="media-body">
                    <h1 class="mt-0">A PROPOS</h1>
                    <p>Je m'appelle Rafael Mico, je suis né le 29/12/2001 et je fais actuellement un BTS SIO (Services Informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métiers) à l'Ecole Nationale de Commerce Bessières, Paris 17, pendant la promotion 2019-2021. Je souhaite continuer mes études dans l'optique de me diriger vers le développement web. Pour se faire j'envisage de faire une école d'ingénieur.</p>
                    <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="btns">
                        <div class="btn">
                            <button type="button" class="btn btn-outline-secondary">Télécharger mon CV</button>
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

        <section class="stages">
            <div class="uneAn">
                <button type="button" class="btn btn-dark btn-lg">1er Année</button>
            </div>
            <div class="stage">
                <h1 class="stageTitre">STAGES</h1>
            </div>
            <div class="deuxAn">
                <button type="button" class="btn btn-dark btn-lg">2ème Année</button>
            </div>
        </section>

        <section class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="Images/cyber-3400789_1280.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1>VEILLE TECHNOLOGIQUE</h1>
                            <button type="button" class="btn btn-outline-light">En savoir plus</button>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="Images/gavel-3577254_1280.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1>VEILLE JURIDIQUE</h1>
                            <button type="button" class="btn btn-outline-light">En savoir plus</button>
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
        </section>

        <section class="contact" id="contact">
            <div class="image">
                <img src="Images/contact.jpg" alt="photo jolie">
            </div>
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
                <!-- Button trigger modal -->
                <button type="submit" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                    Envoyer
                </button>

                <!-- Modal
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
                </div>-->
            </form>
        </section>

        <?php require 'email.php'?>

        <?php require 'footer.php'?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="js.js"></script>
    </body>
</html>
