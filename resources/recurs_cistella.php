<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Cistella</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
        <link rel="stylesheet" href="../style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <div class="threeElem">
            <header>
                <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
            </header>


            <div class="llistaCistella">
                <img src="/../imatges/cart.png"> <br>
                <?php if(isset($_SESSION['cistellaError'])) { ?>
                    <h3 id="error"><?php echo $_SESSION['cistellaError']; ?></h3><br>
                <?php } ?>
                <?php include __DIR__ . "/../views/llistar_cistella.php"; ?>
                <div>
                    <form method="post" action="index.php?accio=efectuar-compra">
                        <input type="submit" name="efectuarCompra" value="Continuar">
                    </form>
                </div>

                <!-- Borrar elements cistella -->
                <form method="post" action="index.php?accio=buidar-cistella">
                    <input type="submit" name="buidarCistella" value="Buidar Cistella">
                </form>
                <br>

                <!-- tornem a l'index -->
                <a href="/index.php?accio=llistar-productes">Tornar al catàleg</a>

            </div>
            <br>
            <footer>
                <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
            </footer>
        </div>
    </body>
</html>