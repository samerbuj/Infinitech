<?php
    function getLiniesComanda($bd_connexio, $comanda_ID)
    {
        try {

            /* Consultem els productes comprats en les comandes del usuari_id */
            $consulta_comandes = $bd_connexio->prepare("SELECT * FROM linea_comanda WHERE comanda_id = $comanda_ID");
            $consulta_comandes->execute();
            $resultat_comandes = $consulta_comandes->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo "Error: " + $e->getMessage();
        }
        return ($resultat_comandes);
    }
?>

