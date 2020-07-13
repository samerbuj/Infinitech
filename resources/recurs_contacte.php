<!DOCTYPE html>
<html>
	<head>
		<title>Conctacte</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <div class="threeElem">
            <header>
                <?php include __DIR__ . "/../views/mostrar_header.php" ?>
            </header>

            <div id="CaixaCont">
                <p>Contacte</p>
                <form id="FormCont" action="index.php?accio=enviar-contacte" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Nom" name="nom" required>
                    <input type="email" placeholder="Email" name="email" required=>
                    <br>
                    <textarea placeholder="Missatge" name="missatge" style="width: 800px;height: 350px;" required></textarea><br>
                    <input type="submit" value="ENVIAR MISSATGE" >
                </form>
            </div>

            <footer>
                <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
            </footer>
        </div>
    </body>
</html>