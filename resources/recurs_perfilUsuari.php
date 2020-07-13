<!DOCTYPE html>
    <html lang="ca">
        <head>
            <meta charset="UTF-8">
            <title>Perfil Usuari</title>
            <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">  <!--font menú-->
            <link rel="stylesheet" href="../style.css">
        </head>
        <body>
            <div class="threeElem">
                <header>
                    <?php require __DIR__ . '/../views/mostrar_header.php'; ?>
                </header>

                <div id="perfilUsuari">
                    <h1> Perfil Usuari  </h1>
                        <?php
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
                        ?>

                    <h3> Informació Personal</h3> <a href="index.php?accio=editar-perfil"> (Editar Perfil)</a>
                    <p><img class="fotoPerfil" id="fotoPerfil" src="/imatges/usuaris/<?php echo $imatge?>" alt="<?php echo $imatge?>" style="width:300px; height: 300px;"> </p>
                    <table>
                        <tr>
                            <td>Nom:</td><td><?php echo $nom ?></td>
                        </tr>
                        <tr>
                            <td>Email:</td><td><?php echo $email ?></td>
                        </tr>
                        <tr>
                            <td>Sexe:</td><td><?php echo $sexe ?></td>
                        </tr>
                        <tr>
                            <td>Adreça:</td><td><?php echo $adreça ?></td>
                        </tr>
                        <tr>
                            <td>Població:</td><td><?php echo $poblacio ?></td>
                        </tr>
                        <tr>
                            <td>Codi postal:</td><td><?php echo $CP ?></td>
                        </tr>
                    </table>
                    <br>
                </div>

                <footer>
                    <?php include __DIR__ . "/../views/mostrar_footer.php" ?>
                </footer>
            </div>
                <?php include __DIR__ . '/../views/mostrar_cartBar.php'; ?>
        </body>
    </html>