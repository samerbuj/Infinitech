<?php
function getComandes($bd_connexio,$usuari_id)
{
    try{

        /* Agafem comanda_id de la BD  */
        $consulta_comanda_id = $bd_connexio->prepare("SELECT id, preu_total FROM comanda WHERE usuari_id = $usuari_id");
        $consulta_comanda_id->execute();
        $resultat_comanda_id = $consulta_comanda_id->fetchAll(PDO::FETCH_ASSOC);

    } catch(PDOException $e){

        echo "Error: " + $e->getMessage();
    }
    return($resultat_comanda_id);
}
?>
