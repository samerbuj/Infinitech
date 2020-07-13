<?php
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/usuariBD.php';
    $user = getUsuari($bd_connexio, $_REQUEST['Email']);
?>