<?php
    function getInfoUsuari($bd_connexio, $usuari_id)
    {
        try{
            $consulta_usuari = $bd_connexio->prepare("SELECT * FROM usuari WHERE id = $usuari_id");
            $consulta_usuari->execute();
            $resultat_usuari = $consulta_usuari->fetchAll(PDO::FETCH_ASSOC);

        } catch(PDOException $e){

            echo "Error: " + $e->getMessage();
        }
        return($resultat_usuari);
    }

?>