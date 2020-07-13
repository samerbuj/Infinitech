<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Información personal</title>
    <link href="imatges/nubeLogo.png" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="twoElem">
        <header>
            <?php include __DIR__ . "/views/mostrar_header.php" ?>
        </header>

        <?php
            if(isset($_REQUEST['Nombre'],$_REQUEST['Email'],$_REQUEST['Pwd'],$_REQUEST['Address'],$_REQUEST['Poblacio'],$_REQUEST['CodiP'],$_REQUEST['gender'])) //Comprobamos que se han enviado datos.
            {
                $Nombre=preg_replace('/[^a-zA-Z\ ]/','',$_REQUEST['Nombre']); //Solo aceptamos caracteres que sean alfanuméricos tanto mayúsculas como minúsculas.
                $Nombre=htmlspecialchars($_REQUEST['Nombre']); //Sirve para evitar ataques.

                $Email=preg_replace('/[^a-zA-Z0-9@.\- ]/','',$_REQUEST['Email']);
                $Email=htmlspecialchars($_REQUEST['Email']);

                $Pwd=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['Pwd']);
                $Pwd=htmlspecialchars($_REQUEST['Pwd']);
                //$NEpwd = $Pwd;
                $Pwd=password_hash($Pwd, PASSWORD_DEFAULT); //Encripta la contraseña.

                $Addr=preg_replace('/[^a-zA-Z0-9ÑñáéíóúüÁÉÍÓÚÜ.,\- ]/','',$_REQUEST['Address']);
                $Addr=htmlspecialchars($Addr);

                $Pobl=preg_replace('/[^a-zA-ZÑñáéíóúüÁÉÍÓÚÜ\ ]/','',$_REQUEST['Poblacio']);
                $Pobl=htmlspecialchars($Pobl);

                $CodiP=preg_replace('/[^0-9\ ]/','',$_REQUEST['CodiP']);
                $CodiP=htmlspecialchars($CodiP);

                $Gender=preg_replace('/[^a-zA-Z\ ]/','',$_REQUEST['gender']);
                $Gender=htmlspecialchars($Gender);
            }
            else
                die('User did not send any data to be saved!');

            try {
                // Establish connection to database
                $conn = include __DIR__ . '/model/connectaBD.php';

                // Throw exceptions in case of error.
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Use prepared statements to mitigate SQL injection attacks.
                // See https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php for more details
                $qry = $conn->prepare('INSERT INTO usuari (nom, email, password, address, poblacio, codiP, gender) VALUES (:nombre, :email, :pwd, :address, :poblacio, :codip, :gender)');
                //Parametrizando los datos para evitar SQL Injection
                $qry->bindParam(":nombre", $_POST["nombre"], PDO::PARAM_STR);
                $qry->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
                $qry->bindParam(":pwd", $_POST["pwd"], PDO::PARAM_STR);
                $qry->bindParam(":address", $_POST["address"], PDO::PARAM_STR);
                $qry->bindParam(":poblacio", $_POST["poblacio"], PDO::PARAM_STR);
                $qry->bindParam(":codip", $_POST["codip"], PDO::PARAM_STR);
                $qry->bindParam(":gender", $_POST["gender"], PDO::PARAM_STR);

                //Vamos a comprobar que el usuario no existe mirando su email
                $sql = $conn->prepare("SELECT * FROM `usuari`");
                $sql->execute();
                $usuaris = $sql->fetchAll(PDO::FETCH_ASSOC);

                $coincidencia=False;

                foreach ($usuaris as $fila) {
                    if ($fila['email']==$Email)
                        $coincidencia=True;
                }

                if (!$coincidencia)
                {
                    //Ejecutamos con los datos que hemos recibido
                    $qry->execute(Array(":nombre" => $Nombre, ":email" => $Email, ":pwd" => $Pwd, ":address" => $Addr, ":poblacio" => $Pobl, ":codip" => $CodiP, ":gender" => $Gender));
                    ?>
                        <div class="Prover">
                            <h3>El teu perfil ha sigut enregistrat.</h3>
                            <br>
                            <a href="index.php"><h4>Tornar a la pàgina principal</h4></a>
                            <a href="index.php?accio=perfil-usuari"><h4>Veure el meu perfil.</h4></a>
                        </div>
                    <?php require_once __DIR__ . '/resources/recurs_login.php';
                }
                else { ?>
                    <div class="Prover">
                        <h3>Hi ha hagut un error enregistrant el teu perfil.</h3>
                        <br>
                        <h4 style="cursor: pointer;" onclick="window.history.back()">Tornar enrere.</h4>
                    </div>
                <?php }

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage() . " file: " . $e->getFile() . " line: " . $e->getLine();
                exit;
            }
        ?>
    </div>
</body>
</html>