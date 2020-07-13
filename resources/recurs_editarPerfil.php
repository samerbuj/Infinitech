<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Editar Perfil </title>
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
        <link rel="stylesheet" href="../style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>

    <body>
        <div class="threeElem" id="editarPerfil">
            <header>
                <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
            </header>

            <div style="margin-left: 25px;">
                <?php   //visualització del formulari
                    require __DIR__ . '/../controller/dades_usuari.php';
                    foreach ($InfoUsuari as $dadesUsuari):
                        $nom = $dadesUsuari['nom'];
                        $sexe = $dadesUsuari['gender'];
                        $email = $dadesUsuari['email'];
                        $adreça = $dadesUsuari['address'];
                        $poblacio = $dadesUsuari['poblacio'];
                        $CP = $dadesUsuari['codiP'];
                        $imatge = $dadesUsuari['imatge'];
                        if($imatge == ''){
                            if($sexe == 'Dona'){
                                $imatge = 'dona.png';
                            }else{
                                $imatge = 'home.jpg';
                            }
                        }
                    endforeach;

                    require __DIR__ . '/../views/editar-perfil.php';
                ?>
            </div>

            <footer >
                <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
            </footer>
        </div>
    </body>
</html>