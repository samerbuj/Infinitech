<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Infinitech</title>
    <link href="../imatges/nubeLogo.png" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="grid-container">
        <header>
            <?php include __DIR__ . "/../views/mostrar_header.php" ?>
        </header>

        <div class="Slider" id="Slider">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="imatges/slide1.png">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="imatges/slide2.png">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="imatges/slide3.png">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <div class="Catalogo" id="Catalogo">
            <?php include __DIR__ . "/../controller/llistar_categories.php"; ?>
            <br>
            <a href="index.php?accio=llistar-categories" class ="aOrange" id="mini">Veure totes les categories</a>
        </div>
        
        <div class="Destacados">
            <h2>Tenim tota la actualitat tecnològica al teu abast. A un click de distància!</h2>
            <br>
            <h4>Qui som?</h4>
            <br>
            <h5>Formem part del grup líder europeu en la distribució d'electrònica de consum i serveis relacionats, amb més de 1.000 establiments situats en 15 països.
                A Espanya, comptem ja amb més de 85 botigues físiques en totes les Comunitats Autònomes, a més de la botiga online. Apostem per la omnicanalitat, integrant tots els avantatges del món físic i de l'online, per a adaptar-nos a les noves tendències de consum.
                Volem estar prop de tots els nostres clients, ja sigui a través del mòbil, de la web o de les botigues físiques, tenint també presència en el centre de les grans ciutats.
                Oferim als nostres clients una gran varietat de serveis i solucions personalitzades, i treballem cada dia perquè l'experiència de compra sigui única. A més, comptem amb un ampli assortiment de productes de les millors marques amb preus actualitzats gràcies a les etiquetes digitals.
                <br>
                Res d'això seria possible sense l'ajuda d'un gran equip de més de 6500 professionals. Som apassionats de la tecnologia i volem acompanyar als nostres clients en el fascinant món digital en el qual estem immersos.</h5>

        </div>

        <footer class ="Footer">
            <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
        </footer>
    </div>

    <?php include __DIR__ . '/../views/mostrar_cartBar.php';?>

</body>

</html>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>