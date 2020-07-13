<?php
    require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/productes.php';
    $productes = getProductes($bd_connexio); // Aquesta crida és al model
    /*foreach ($productes as $producte):
        echo $producte['nom'];
    endforeach;*/
    include __DIR__ . '/../views/llistar_productes.php';
?>