<?php
    function getCategories($bd_connexio)
    {
        try{
            $consulta_categories = $bd_connexio->prepare("SELECT id,nom,imagen FROM categoria");
            $consulta_categories->execute();
            $resultat_categories = $consulta_categories->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){

            echo "Error: " + $e->getMessage();
        }
        return($resultat_categories);
    }

?>
