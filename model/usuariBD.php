<?php
function getUsuari($bd_connexio, $email)
{
    try{
        $consulta_usuari = $bd_connexio->prepare("SELECT * FROM usuari WHERE email = '$email'");
        $consulta_usuari->execute();
        $resultat_usuari = $consulta_usuari->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e){

        echo "Error: " + $e->getMessage();
    }
    return($resultat_usuari[0]);
}

?>