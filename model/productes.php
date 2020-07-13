<?php
    function getProductes($bd_connexio)
    {
        try{
            $consulta_productes = $bd_connexio->prepare("SELECT id,nom,descripcio,preu,imatge FROM producte");
            $consulta_productes->execute();
            $resultat_productes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            echo "Error: " + $e->getMessage();
        }
        return($resultat_productes);
    }
?>