<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="imatges/nubeLogo.png" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div class="twoElem">
        <header>
            <?php include __DIR__ . "/views/mostrar_header.php" ?>
        </header>

    <!-- Form-->
        <div class="registre">
            <div class="title">
                <h1>Registre</h1>

                <div class="testbox">
                    <form method="post" action="RegisterUser.php">
                        <hr>
                        <input type="text" name="Nombre" class="RegisterInp" placeholder="Nom" chars="latin" required/>
                        <input type="email" name="Email" class="RegisterInp" placeholder="Email" chars="email" required/>
                        <input type="password" name="Pwd" class="RegisterInp" placeholder="Contrasenya" chars="alpha-numeric" required/>
                        <input type="text" name="Address" class="RegisterInp" placeholder="Adreça" chars="address" maxlength="30" required/>
                        <input type="text" name="Poblacio" class="RegisterInp" placeholder="Població" maxlength="30" chars="latin" required/>
                        <input type="text" name="CodiP" class="RegisterInp" placeholder="Codi postal" maxlength="5" chars="only-numbers" required/>

                        <div class="gender">
                            <input type="radio" value="Home" id="male" name="gender" required/>
                            <label for="male" class="radio">Home</label>

                            <input type="radio" value="Dona" id="female" name="gender" required/>
                            <label for="female" class="radio">Dona</label>
                        </div>

                        <label>
                            <input type="checkbox" required/>Acceptar <a href="#">termes i condicions</a>.
                        </label>

                        <div>
                            <input type="submit" name="registerUser" value="Registre">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    $(document).on('keyup change input', '[chars]', function(event) {

        var $elem = $(this),
            value = $elem.val(),
            regReplace,
            preset = {
                'only-numbers': '0-9',
                'numbers': '0-9\\s',
                'only-letters': 'A-Za-z',
                'letters': 'A-Za-z\\s ',
                'latin': 'A-Za-z\\sÑñáéíóúüÁÉÍÓÚÜ ',
                'email': '\\wÑñ@._\\-',
                'alpha-numeric': '\\w\\s',
                'latin-alpha-numeric': '\\w\\sÑñáéíóúüÁÉÍÓÚÜ',
                'address': '\\w\\sÑñáéíóúüÁÉÍÓÚÜ.,- '
            },
            filter = preset[$elem.attr('chars')] || $elem.attr('chars');

        regReplace = new RegExp('[^' + filter + ']', 'ig');
        $elem.val(value.replace(regReplace, ''));

    })
</script>