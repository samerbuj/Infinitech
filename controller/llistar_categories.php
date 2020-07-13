<?php

	require_once __DIR__ . '/../model/connectaBD.php';
    require_once __DIR__ . '/../model/categories.php';
	$categories = getCategories($bd_connexio); // Aquesta crida és al model
    /*foreach ($categories as $categoria):
        echo $categoria['nom'];
    endforeach;*/
	include __DIR__ . '/../views/llistar_categories.php';

?>