 <?php

 require_once __DIR__ . '/../model/connectaBD.php';
 require_once __DIR__ . '/../model/infoProducte.php';

 $producteInfo = getInfoProducte($bd_connexio, $producteID); // Aquesta crida és al model

 ?>