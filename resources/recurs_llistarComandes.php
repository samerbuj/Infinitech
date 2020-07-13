<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Llistat de comandes</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="threeElem">
            <header>
                <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
            </header>

            <div class="container">
                <?php  include __DIR__ . "/../controller/llistar_comandes.php";  ?>
            </div>

            <footer>
                <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
            </footer>

        </div>

        <?php include __DIR__ . '/../views/mostrar_cartBar.php'; ?>
    </body>
</html>