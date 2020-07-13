<?php
    session_start();
    if(isset($_REQUEST['Email'],$_REQUEST['Pwd'])) //Comprovem que s'han enviat dades en el formulari.
    {
        $email = $_REQUEST['Email'];
        $password = $_REQUEST['Pwd'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($password, FILTER_DEFAULT)) //filter_var: validar les dades que arriben del formulari de login(a la part del servidor).
        {
            include __DIR__ . "/../controller/login.php";
            if(password_verify ($password, $user['password'])) { //comprova que la contrasenya en hash, coincideixi amb la contrasenya hash guardada a la BD
                $_SESSION['user_id'] = $user['id'];
                unset($_SESSION['cistellaError']);
                header("Location:/../index.php");
                exit;
            }
        }
    }

    header("Location: /../index.php?accio=inici-sessio");
    exit;
?>