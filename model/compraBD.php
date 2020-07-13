<?php
function setCompraAfegida($bd_connexio)
{
    $compraEfectuada = 1;
    try{
        $usuari_id = $_SESSION['user_id'];

       /* Afegim comanda a la BD */
        $sql = $bd_connexio->prepare("INSERT INTO comanda (usuari_id) VALUES ('$usuari_id')");
        $ret = $sql->execute();
        if($ret == false){
            echo"error ret";
        }

        /* Agafem comanda_id de la BD  */
        $consulta_comanda_id = $bd_connexio->prepare("SELECT id FROM comanda WHERE usuari_id = $usuari_id ORDER BY ID DESC LIMIT 1"); //ORDER BY ID DESC LIMIT 1 --> agafa últim element afegit a la BD
        $consulta_comanda_id->execute();
        $resultat_comanda_id = $consulta_comanda_id->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultat_comanda_id as $comanda_id): //passar d'array a string
            $comanda_id  = ($comanda_id['id']);
        endforeach;

        $dades = $_SESSION['cistella']; // guardem la sessió en un array de productes (llista)
        $total=0;

        /* Afegim linea_comanda a la BD */
        foreach ($dades as $producte):
            $idProducte  = ($producte['id']);
            $preuProducte =  ($producte['preu']);
            $quantitatProducte = ($producte['quantitat']);
            $preuTotalProducte = $quantitatProducte*$preuProducte;

            /* sumem els preus de les unitats comprades */
            $total = $total + $preuTotalProducte;
            $sql = $bd_connexio->prepare("INSERT INTO linea_comanda (comanda_id, producte_id, quantitat, preu_total) VALUES ($comanda_id,$idProducte, $quantitatProducte, $preuTotalProducte)");
            $ret = $sql->execute();
            if($ret == false){  //comprovem si s'ha executat correctament el UPDATE
                echo"error ret";
            }
        endforeach;

        /* Actualitzem la comanda amb el preu total */
        $sql = $bd_connexio->prepare(" UPDATE comanda SET preu_total = $total WHERE id= $comanda_id");
        $ret = $sql->execute();
        if($ret == false){ //comprovem si s'ha executat correctament el UPDATE
            echo"error ret preu total";
        }

    } catch(PDOException $e){

        echo "Error: " + $e->getMessage();
    }
    return($compraEfectuada);
}

?>