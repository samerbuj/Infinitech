<?php
    $servidor= "127.0.0.1";
    $bd_user="tdiw-f8";
    $bd_password="QHvLB5pi";
    $bd_name="tdiwf8";
   /* $bd_connexio = mysql_connect($servidor, $bd_user, $bd_password);*/
    $bd_connexio = new PDO('mysql:host=127.0.0.1;dbname=tdiwf8;port=3306;charset=utf8mb4',$bd_user,$bd_password);

    if (!$bd_connexio) {
        die("No s'ha pogut connectar a la base de dades");
    }
    return $bd_connexio;
?>
