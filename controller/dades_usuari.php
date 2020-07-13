<?php
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/dadesUsuari.php';

    $usuari_id = $_SESSION['user_id'];
    $InfoUsuari = getInfoUsuari($bd_connexio, $usuari_id); // Aquesta crida és al model

?>