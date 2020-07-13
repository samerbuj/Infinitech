<?php   /* Enviament del formulari amb fitxer(per pujar el fitxer)  */
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/actualitzarPerfil.php';

    $usuari_id = $_SESSION['user_id'];
    unset($_SESSION['imgError']);

    if(isset($_REQUEST['nom'],$_REQUEST['email'],$_REQUEST['adreça'],$_REQUEST['poblacio'],$_REQUEST['CP'],$_REQUEST['sexe']))
    {
        $nom = preg_replace('/[^a-zA-Z\ ]/', '', $_REQUEST['nom']);
        $nom = htmlspecialchars($_REQUEST['nom']); //Sirve para evitar ataques.

        $email = preg_replace('/[^a-zA-Z0-9@.\- ]/', '', $_REQUEST['email']);
        $email = htmlspecialchars($_REQUEST['email']);

        $adreça = preg_replace('/[^a-zA-Z0-9ÑñáéíóúüÁÉÍÓÚÜ.,\- ]/', '', $_REQUEST['adreça']);
        $adreça = htmlspecialchars($adreça);

        $poblacio = preg_replace('/[^a-zA-ZÑñáéíóúüÁÉÍÓÚÜ\ ]/', '', $_REQUEST['poblacio']);
        $poblacio = htmlspecialchars($poblacio);

        $CP = preg_replace('/[^0-9\ ]/', '', $_REQUEST['CP']);
        $CP = htmlspecialchars($CP);

        $sexe = preg_replace('/[^a-zA-Z\ ]/', '', $_REQUEST['sexe']);
        $sexe = htmlspecialchars($sexe);

        $imatge = '';

        if (isset($_FILES['imatgePerfil']) && !empty($_FILES['imatgePerfil']) && $_FILES['imatgePerfil']['name'] != '') {
            $fileExtensions = ['jpeg', 'jpg', 'png']; // llista de les extensions permeses

            $fileNom = $_FILES['imatgePerfil']['name'];
            $fileSize = $_FILES['imatgePerfil']['size'];//;filesize($_FILES['imatgePerfil']['tmp_name'])
            $fileExtensio = strtolower(end(explode('.', $fileNom)));
            if (in_array($fileExtensio, $fileExtensions)) {
                if ($fileSize > 2000000 || $_FILES['imatgePerfil']['error'] != UPLOAD_ERR_OK) {
                    $_SESSION['imgError'] = "L'arxiu és més gran de 2MB. Ha de ser més petit o igual a 2MB.";
                    header("Location: /../index.php?accio=editar-perfil");
                } else {
                    move_uploaded_file($_FILES['imatgePerfil']['tmp_name'], $filesAbsolutePath . $usuari_id . '.' . $fileExtensio);
                    $imatge = $usuari_id . '.' . $fileExtensio;
                }

            } else {
                $_SESSION['imgError'] = "L'extensió de l'arxiu no és permesa. Si us plau, utilitza un PNG o JPEG.";
                header("Location: /../index.php?accio=editar-perfil");
            }
        }

        if(!isset($_SESSION['imgError'])){
            setPerfil($bd_connexio, $usuari_id, $nom, $sexe, $email, $adreça, $poblacio, $CP, $imatge);
            header("Location: /../index.php?accio=perfil-usuari");
        }

    }else{
        header("Location: /../index.php?accio=editar-perfil");
    }
?>