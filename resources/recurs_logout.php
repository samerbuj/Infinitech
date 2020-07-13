<?php
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);  /*  "unset" --> treu valor a la variable $_SESSION  */
    }

    header('Location: /../index.php');  /* et redirigeix a la pàgina de Login */
    exit;
?>