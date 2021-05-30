<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accueil Connécté</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-color: #121317;
    }
    
    #search {
        width: 500px;
        position: relative;
        top: 7px;
        left: 250px;
    }
    
    #compte {
        position: relative;
        top: 0px;
        left: 945px;
    }
    
    #panier {
        position: relative;
        top: 1px;
        left: 1005px;
    }
    
    #loupe {
        position: absolute;
        top: 4px;
        left: 715px;
        height: 40px;
        width: 25px;
    }
    
    #men {
        position: absolute;
        top: -15px;
        left: 1350px;
        width: 25px;
        height: 80px;
        color: white;
    }
    
    #cart {
        position: absolute;
        top: -15px;
        left: 1197px;
        width: 25px;
        height: 80px;
        color: white;
    }
    
    #collection {
        position: relative;
        left: 200px;
    }
    
    .carousel {
        height: 500px;
        width: 1519px;
        overflow: hidden;
        text-align: center;
        position: relative;
        top: -74px;
        padding: 0;
    }
    
    .carousel__controls,
    .carousel__slide,
    .carousel__activator {
        display: none;
    }
    
    .carousel__activator:nth-of-type(5):checked~.carousel__track {
        -webkit-transform: translateX(-400%);
        transform: translateX(-400%);
    }
    
    .carousel__activator:nth-of-type(5):checked~.carousel__slide:nth-of-type(5) {
        -webkit-animation: carousel-show-slide 0.5s;
        animation: carousel-show-slide 0.5s;
        display: block;
    }
    
    .carousel__activator:nth-of-type(5):checked~.carousel__controls:nth-of-type(5) {
        display: block;
    }
    
    .carousel__activator:nth-of-type(5):checked~.carousel__indicators .carousel__indicator:nth-of-type(5) {
        opacity: 1;
    }
    
    .carousel__activator:nth-of-type(4):checked~.carousel__track {
        -webkit-transform: translateX(-300%);
        transform: translateX(-300%);
    }
    
    .carousel__activator:nth-of-type(4):checked~.carousel__slide:nth-of-type(4) {
        -webkit-animation: carousel-show-slide 0.5s;
        animation: carousel-show-slide 0.5s;
        display: block;
    }
    
    .carousel__activator:nth-of-type(4):checked~.carousel__controls:nth-of-type(4) {
        display: block;
    }
    
    .carousel__activator:nth-of-type(4):checked~.carousel__indicators .carousel__indicator:nth-of-type(4) {
        opacity: 1;
    }
    
    .carousel__activator:nth-of-type(3):checked~.carousel__track {
        -webkit-transform: translateX(-200%);
        transform: translateX(-200%);
    }
    
    .carousel__activator:nth-of-type(3):checked~.carousel__slide:nth-of-type(3) {
        -webkit-animation: carousel-show-slide 0.5s;
        animation: carousel-show-slide 0.5s;
        display: block;
    }
    
    .carousel__activator:nth-of-type(3):checked~.carousel__controls:nth-of-type(3) {
        display: block;
    }
    
    .carousel__activator:nth-of-type(3):checked~.carousel__indicators .carousel__indicator:nth-of-type(3) {
        opacity: 1;
    }
    
    .carousel__activator:nth-of-type(2):checked~.carousel__track {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }
    
    .carousel__activator:nth-of-type(2):checked~.carousel__slide:nth-of-type(2) {
        -webkit-animation: carousel-show-slide 0.5s;
        animation: carousel-show-slide 0.5s;
        display: block;
    }
    
    .carousel__activator:nth-of-type(2):checked~.carousel__controls:nth-of-type(2) {
        display: block;
    }
    
    .carousel__activator:nth-of-type(2):checked~.carousel__indicators .carousel__indicator:nth-of-type(2) {
        opacity: 1;
    }
    
    .carousel__activator:nth-of-type(1):checked~.carousel__track {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
    }
    
    .carousel__activator:nth-of-type(1):checked~.carousel__slide:nth-of-type(1) {
        -webkit-animation: carousel-show-slide 0.5s;
        animation: carousel-show-slide 0.5s;
        display: block;
    }
    
    .carousel__activator:nth-of-type(1):checked~.carousel__controls:nth-of-type(1) {
        display: block;
    }
    
    .carousel__activator:nth-of-type(1):checked~.carousel__indicators .carousel__indicator:nth-of-type(1) {
        opacity: 1;
    }
    
    .carousel__control {
        height: 30px;
        width: 30px;
        margin-top: -15px;
        top: 50%;
        position: absolute;
        display: block;
        cursor: pointer;
        border-width: 5px 5px 0 0;
        border-style: solid;
        border-color: #fafafa;
        opacity: 0.35;
        outline: 0;
        z-index: 3;
    }
    
    .carousel__control:hover {
        opacity: 1;
    }
    
    .carousel__control--forward {
        left: 10px;
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
    }
    
    .carousel__control--backward {
        right: 10px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    
    .carousel__indicators {
        position: absolute;
        bottom: 20px;
        width: 100%;
        text-align: center;
    }
    
    .carousel__indicator {
        height: 15px;
        width: 15px;
        border-radius: 100%;
        display: inline-block;
        z-index: 2;
        cursor: pointer;
        opacity: 0.35;
        margin: 0 2.5px 0 2.5px;
    }
    
    .carousel__indicator:hover {
        opacity: 0.75;
    }
    
    .carousel__track {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        -webkit-transition: -webkit-transform 0.5s ease 0s;
        transition: -webkit-transform 0.5s ease 0s;
        transition: transform 0.5s ease 0s;
        transition: transform 0.5s ease 0s, -webkit-transform 0.5s ease 0s;
    }
    
    .carousel__track .carousel__slide {
        display: block;
    }
    
    .carousel__track .carousel__slide:nth-of-type(1) {
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
    }
    
    .carousel__track .carousel__slide:nth-of-type(2) {
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }
    
    .carousel__track .carousel__slide:nth-of-type(3) {
        -webkit-transform: translateX(200%);
        transform: translateX(200%);
    }
    
    .carousel__track .carousel__slide:nth-of-type(4) {
        -webkit-transform: translateX(300%);
        transform: translateX(300%);
    }
    
    .carousel__track .carousel__slide:nth-of-type(5) {
        -webkit-transform: translateX(400%);
        transform: translateX(400%);
    }
    
    .carousel__slide {
        height: 100%;
        right: 0;
        position: absolute;
        overflow-y: auto;
        top: 0;
        left: 0;
    }
    
    .carousel__slide {
        border-radius: 10px;
        overflow: hidden;
    }
    
    .carousel__indicator {
        background-color: #fafafa;
    }
    
    @-webkit-keyframes carousel-show-slide {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes carousel-show-slide {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    .carousel__slide:nth-of-type(1) {
        background-image: url("vtt2.jpg");
        background-size: cover;
        background-position: center;
    }
    
    .carousel__slide:nth-of-type(2) {
        background-image: url("vill.jpg");
        background-size: cover;
        background-position: center;
    }
    
    .carousel__slide:nth-of-type(3) {
        background-image: url("elec.jpg");
        background-size: cover;
        background-position: center;
    }
    
    .carousel__slide:nth-of-type(4) {
        background-image: url("velo.jpg");
        background-size: cover;
        background-position: center;
    }
    
    .carousel__slide:nth-of-type(5) {
        background-image: url("vt.jpg");
        background-size: cover;
        background-position: center;
    }
    
    .vtt {
        color: #121317;
        width: 380px;
        height: 160px;
        font-size: 20pt;
        border-radius: 10px;
        position: relative;
        top: 100px;
        left: 350px;
        font-family: 'Bebas Neue', cursive;
    }
    
    .logo {
        width: 300px;
        height: 250px;
        position: absolute;
        top: -100px;
        left: -30px;
    }
    
    #groupe1 {
        width: 50px;
    }
    
    #fav {
        position: relative;
        top: 1px;
        left: 750px;
    }
    
    #heart {
        position: relative;
        top: -70px;
        left: 1045px;
        color: white;
        width: 25px;
        height: 50px;
    }
    
    .prix {
        color: #121317;
        font-size: 30pt;
    }
    
    .iconify {
        width: 30px;
        height: 100px;
        position: relative;
        top: 44px;
        left: 10px;
    }
</style>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="Accueil.php"><img class="logo" src="logo.png" alt="BIKE"></a>
            </div>
            <ul class="nav navbar-nav">

                <li id="collection" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nos collections<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">VTT</a></li>
                        <li><a href="#">Vélos de Ville</a></li>
                        <li><a href="#">Vélos de Course</a></li>
                        <li><a href="#">Vélos Éléctrique</a></li>
                    </ul>
                    <li>
                        <div id="groupe1" class="form-group ">
                            <input type="search" id="search" name="password " class="form-control" placeholder="Recherchez un produit" />
                            <span id="loupe" class="iconify" data-icon="bi:search" data-inline="false"></span>
                        </div>
                        
                <div class="text-center">
                        <li id="panier"><a href="#">Mon Panier</a></li>
                        <li id="fav"><a href="#">Mes Favoris</a></li>

                        <li id="compte" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mon Compte<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mes informations</a></li>
                                <li><a href="#">Mes commandes</a></li>
                                <li><a href="#">Bon d'Achat & Avoirs</a></li>
                                <li><a href="deconnexion.php">Déconnéxion</a></li>
                            </ul>
            </ul>
        </div>
    </nav>
    <span id="men" class="iconify" data-icon="line-md:account" data-inline="false"></span>
    <span id="cart" class="iconify" data-icon="ant-design:shopping-cart-outlined" data-inline="false"></span>
    <span id="heart" class="iconify" data-icon="akar-icons:heart" data-inline="false"></span>
    <ul class="carousel my-carousel">
        <input type="radio" id="1" name="activator" checked="checked" class="carousel__activator" />
        <input type="radio" id="2" name="activator" class="carousel__activator" />
        <input type="radio" id="3" name="activator" class="carousel__activator" />
        <input type="radio" id="4" name="activator" class="carousel__activator" />
        <input type="radio" id="5" name="activator" class="carousel__activator" />
        <div class="carousel__controls">
            <label for="2" class="carousel__control carousel__control--backward"></label>
            <label for="5" class="carousel__control carousel__control--forward"></label>
        </div>
        <div class="carousel__controls">
            <label for="3" class="carousel__control carousel__control--backward"></label>
            <label for="1" class="carousel__control carousel__control--forward"></label>
        </div>
        <div class="carousel__controls">
            <label for="4" class="carousel__control carousel__control--backward"></label>
            <label for="2" class="carousel__control carousel__control--forward"></label>
        </div>
        <div class="carousel__controls">
            <label for="5" class="carousel__control carousel__control--backward"></label>
            <label for="3" class="carousel__control carousel__control--forward"></label>
        </div>
        <div class="carousel__controls">
            <label for="1" class="carousel__control carousel__control--backward"></label>
            <label for="4" class="carousel__control carousel__control--forward"></label>
        </div>
        <li class="carousel__slide">
            <div class="vtt">
            <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>
            </div>
        </li>
        <li class="carousel__slide">
            <div class="vtt">
                <strong>DÉCOUVREZ NOS VÉLOS DE VILLE A PETIT PRIX</strong>
                <p class="prix">A Partir de 200€</p>
            </div>
        </li>
        <li class="carousel__slide">
            <div class="vtt">
                <strong>DÉCOUVREZ NOS VELOS ÉLECTRIQUE</strong>
                <p class="prix">A Partir de 1100€</p>
            </div>
        </li>
        <li class="carousel__slide">
            <div class="vtt">
                <strong>DÉCOUVREZ NOS VELOS DE COURSE</strong>
                <p class="prix">A Partir de 700€</p>
            </div>
        </li>
        <li class="carousel__slide">
            <div class="vtt">
                <strong>DÉCOUVREZ NOS MODÉLES DE VTT A PETIT PRIX</strong>
                <p class="prix">A Partir de 350€</p>
            </div>
        </li>
        <div class="carousel__indicators">
            <label for="1" class="carousel__indicator"></label>
            <label for="2" class="carousel__indicator"></label>
            <label for="3" class="carousel__indicator"></label>
            <label for="4" class="carousel__indicator"></label>
            <label for="5" class="carousel__indicator"></label>
        </div>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

            <div class="me-5 d-none d-lg-block">
                <span>Suivez nous sur nos réseaux sociaux :</span>
                <span class="iconify" data-icon="akar-icons:facebook-fill" data-inline="false"></span>
                <span class="iconify" data-icon="akar-icons:instagram-fill" data-inline="false"></span>
                <span class="iconify" data-icon="akar-icons:twitter-fill" data-inline="false"></span>
                <span class="iconify" data-icon="akar-icons:google-fill" data-inline="false"></span>
                <span class="iconify" data-icon="akar-icons:linkedin-fill" data-inline="false"></span>
            </div>
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>

        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i><strong>Qui somme nous ?</strong>
                        </h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In nostrum explicabo ut rerum aspernatur. Ipsa incidunt unde magnam delectus et, sint ipsum quasi perspiciatis aspernatur est, repellat, sequi quos placeat.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <strong>Products</strong>
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Politique de confidentialité</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Conditions d'utilisation</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Mentions légales</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Condition générales de ventes</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <strong>Liens utiles</strong>
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Besoin d'aide ?</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">SAV</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Publicité</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <strong>Contact</strong>
                        </h6>
                        <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i> info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>

                </div>
            </div>
        </section>


        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://ecoleiris.fr/">EcoleIris.fr</a>
        </div>

    </footer>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>

</html>
