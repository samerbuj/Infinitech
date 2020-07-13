<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Llistat de productes</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="threeElem" id="LlistarProd">
            <header>
                <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
            </header>

            <div>
                <?php include __DIR__ . "/../controller/llistar_productes.php"; ?>
            </div>

            <footer>
                <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
            </footer>
        </div>

        <?php include __DIR__ . '/../views/mostrar_cartBar.php'; ?>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        document.getElementById('LlistarProd').style.gridTemplateRows = "100px auto 100px";
    });
</script>