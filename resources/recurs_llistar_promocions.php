<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Promocions </title>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
        <link rel="stylesheet" href="../style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>
    <div class="threeElem" id="LlistarProm">
        <header>
            <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
        </header>

        <div class="container">
            <div>
                <img class="fotoPromocio" id="fotoPromocio" src="/imatges/regalazo.PNG">
            </div>

            <section>
                <a href="index.php?accio=llistar-productes"><img class="fotoPromocio" id="fotoPromocio" src="/imatges/Promo1.png"></a>
                <a href="index.php?accio=llistar-productes"><img class="fotoPromocio" id="fotoPromocio" src="/imatges/Promo2.png"></a>
            </section>
        </div>

        <footer>
            <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
        </footer>
    </div>

    <?php include __DIR__ . '/../views/mostrar_cartBar.php'; ?>
    </body>
</html>