<?php
function setPerfil($bd_connexio, $usuari_id, $nom, $sexe, $email, $adreça, $poblacio, $CP, $imatge )
{
    $compraEfectuada = 1;
    try{
        /* Actualitzem les dades de l'usuari */
        if ($imatge != '') {
            $sql = $bd_connexio->prepare(" UPDATE usuari SET nom = '$nom', gender = '$sexe', email = '$email', address = '$adreça', poblacio = '$poblacio', codiP ='$CP', imatge ='$imatge' WHERE id= $usuari_id");
        } else {
            $sql = $bd_connexio->prepare(" UPDATE usuari SET nom = '$nom', gender = '$sexe', email = '$email', address = '$adreça', poblacio = '$poblacio', codiP ='$CP' WHERE id= $usuari_id");
        }
        $ret = $sql->execute();

        if($ret == false){ //comprovem si s'ha executat correctament el UPDATE
            echo"error ret ";
        }

    } catch(PDOException $e){

        echo "Error: " + $e->getMessage();
    }

}

?>
