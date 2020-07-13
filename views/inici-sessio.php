<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Iniciar sessió</title>
        <link href="../imatges/nubeLogo.png" rel="shortcut icon" type="image/x-icon">
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="twoElem">
            <header>
                <?php include __DIR__ . "/mostrar_header.php" ?>
            </header>
        <!-- Form-->
        <div class="log">

            <div class="title">
                <h1>Iniciar sessió</h1>
            </div>
            <div class="testbox">
                <hr>
                <br>
                <form method="post" action="/resources/recurs_login.php">
                    <label id="icon" for="name"></label>
                    <input type="text" name="Email" id="email" placeholder="Email" required/>

                    <label id="icon" for="name"></label>
                    <input type="password" name="Pwd" id="pwd" placeholder="Contrasenya" required/>

                    <div>
                        <label>
                            <a href="#">Ha oblidat la contrasenya?</a>
                            <div id="checkRecordar">
                                <input type="checkbox"/>Recordar
                            </div>
                        </label>
                    </div>
                    
                    <div>
                        <input type="submit" name="login" value="Iniciar">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>