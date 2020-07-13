<?php
    function getInfoProducte($bd_connexio, $producteID)
    {
        try {
            $consulta_infoProducte = $bd_connexio->prepare("SELECT nom,descripcio,preu,imatge FROM producte WHERE id = $producteID");
            $consulta_infoProducte->execute();
            $resultat_infoProducte = $consulta_infoProducte->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " + $e->getMessage();
        }
        return ($resultat_infoProducte);
    }
?>